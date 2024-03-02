<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecturer_id',
        'student_id',
        'subject_id',
        'lesson_type',
        'theme',
        'lesson_date',
        'lesson_score',
        'is_passed',
        'assessment_date'
    ];

    public function lecturer (): BelongsTo
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id');
    }

    public function student (): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function subject (): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
