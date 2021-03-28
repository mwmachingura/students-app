<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function subjectState()
    {
        $this->belongsTo('App\Models\SubjectState');
    }

    public function form()
    {
        $this->belongsTo('App\Models\Form');
    }
}
