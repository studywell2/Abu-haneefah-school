<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'student_name',
        'dob',
        'grade',
        'parent_name',
        'email',
        'phone',
        'documents',
    ];

    protected $casts = [
        'documents' => 'array', // Automatically cast JSON to array
    ];
}
