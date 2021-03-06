<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher');
    }

    public function form()
    {
        return $this->belongsTo('App\Models\Form');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

}
