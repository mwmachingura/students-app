<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectState extends Model
{
    use HasFactory;

    public function subjects()
    {
        $this->hasMany('App\Models\SUbject');
    }
}
