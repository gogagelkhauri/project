<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spotlight extends Model
{
    use HasFactory;

    protected $fillable = ['job_id'];

    public function job()
    {
        return $this->hasOne('App\Models\Job','id','job_id');
    }
}
