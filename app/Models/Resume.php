<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    public function educations()
    {
        return $this->hasMany('App\Models\Education');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Models\Skill');
    }
}
