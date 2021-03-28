<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function classroom()
    {
        $this->belongsTo('App\Models\Student');
    }

    public function hostel()
    {
        $this->belongsTo('App\Models\Hostel');
    }

    public function studentType()
    {
        $this->belongsTo('App\Models\StudentType');
    }
}
