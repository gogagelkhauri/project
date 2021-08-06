<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','icon'];

    public function jobs()
    {
        return $this->belongsToMany('App\Models\Job','job_category','job_id','category_id');
    }

    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }
}
