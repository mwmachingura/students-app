<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public function subjects()
    {
        $this->hasMany('App\Models\Subject');
    }

    public function forms()
    {
        $this->hasMany('App\Models\Form');
    }
}
