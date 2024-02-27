<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecturer_id',
        'faculty_id',
        'group_id',
        'student_id',
        'subject_id',
        'lesson_type',
        'theme',
        'lesson_date',
        'lesson_score',
        'is_passed',
    ];
}
