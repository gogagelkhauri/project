<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Spotlight;
use Auth;

class HomeController extends Controller
{
    public function home()
    {
        $jobs = Job::orderBy('added_on', 'DESC')->take(5)->get();
        $categories = Category::all();
        $skills = Skill::all();
        $spotlights = Spotlight::all();
        
        return view('frontend.index', compact('jobs','skills','categories','spotlights'));
    }

    public function allJobs(Request $request)
    {
        $count_jobs = Job::all()->count();
        $jobs = Job::paginate(8);
        if($request['sort'] != null)
        {
           // dd($request['sort']);
            $jobs = Job::orderBy('added_on',$request['sort'])->paginate(8);
           // dd($jobs);
        }
        $categories = Category::all();
        $skills = Skill::all();
        return view('frontend.allJobs', compact('jobs','skills','categories','count_jobs'));
    }

    public function show($id)
    {
        // if((int)$id == 0)
        // {
        //     return redirect('/');
        // }
        
        $job = Job::findOrFail($id);
        return view('frontend.job',compact('job'));
    }

    public function search(Request $request)
    {
        $skills = $request['skills'];
        $categories = $request['categories'];
        $cat = $categories[0] ?? '';
        

        if($skills != null){
            $jobs =  Job::whereHas('skills', function ($q) use ($skills) {
                $q->whereIn('name', $skills);
            });
        }

        if($categories != null){
            if(!isset($jobs))
            {
                $jobs =  Job::whereHas('categories', function ($q) use ($categories) {
                    $q->whereIn('name', $categories);
                });
            }else{
                $jobs =  $jobs->whereHas('categories', function ($q) use ($categories) {
                    $q->whereIn('name', $categories);
                });
            }
            
        }

        if($request['name'] != null)
        {
            if(!isset($jobs))
            {
                $jobs = Job::where('title','LIKE','%'.$request['name'].'%');
            }else{
                $jobs = $jobs->where('title','LIKE','%'.$request['name'].'%');
            }
        }

        $count_jobs = $jobs->count();
        $jobs = $jobs->paginate(8)->appends(request()->query());
        return view('frontend.search',compact('jobs','cat','count_jobs'));
    }


    public function categories()
    {
        $categories = Category::all();
        return view('frontend.categories',compact('categories'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('frontend.profile',compact('user'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function addresume()
    {
        return view('frontend.addresume');
    }
}
