<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use Illuminate\Support\Carbon;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = ['1','2','5','6'];
        $categories = ['1'];
        $date = now();
        for($i = 0; $i < 20; $i++)
        {
            $job = Job::create([
                'title' => 'Web Developer ' . $i,
                'schedule' => '10:00 - 18:00',
                'logo' => '20201117134632.jpg',
                'description' => 'Some Description' . $i,
                'location' => 'Tbilisi',
                'hours' => '35',
                'salary_type' => 'month',
                'salary' => '3000',
                'job_type' => 'full-time',
                'added_on' => $date,
                'end_on' => $date->addDays(20),
                'user_id' => 1
            ]);
            foreach($skills as $skill)
            {
                $job->skills()->attach($skill);
            }
    
            foreach($categories as $category)
            {
                $job->categories()->attach($category);
            }
        }
    }
}
