<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function jobs()
    {
        return $this->belongsToMany('App\Models\Job');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function resumes()
    {
        return $this->belongsToMany('App\Models\Resume');
    }
}
