<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function classrooms()
    {
        return $this->belongsToMany('App\Models\Classroom');
    }

     //Accepts $classroom as a string thanks to where() function
     public function hasAnyRole(string $classroom){
        return null !== $this->classrooms()->where('name', $classroom)->first();
    }

    //Accepts $classroom as an array thanks to whereIn() function
    public function hasAnyRoles(array $classroom){
        return null !== $this->classrooms()->whereIn('name', $classroom)->first();
    }
}
