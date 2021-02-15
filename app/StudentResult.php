<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    protected $fillable = [
        'student_name',
        'ct1h',
        'ct2h',
        'ct3h',
        'half',
        'ct1f',
        'ct2f',
        'ct3f',
        'final'
    ];
}
