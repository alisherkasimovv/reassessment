<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

class ObjectQuery
{
    protected array $columnMap = [
        'lecturerId' => 'lecturer_id',
        'inspectorId' => 'inspector_id',
        'facultyId' => 'faculty_id',
        'groupId' => 'group_id',
        'studentId' => 'student_id',
        'subjectId' => 'subject_id',
        'lessonType' => 'lesson_type',
        'lessonDate' => 'lesson_date',
        'lessonScore' => 'lesson_score',
        'isPassed' => 'is_passed',
        'assessmentDate' => 'assessment_date'
    ];

    public function transform(Request $request): array
    {
        $queryArray = [];
        $query = $request->all();
        foreach ($query as $key => $val)
        {
            if ($key == 'withChildren') continue;
            $queryArray[] = [$this->columnMap[$key] ?? $key, '=', $val];
        }

        return $queryArray;
    }
}
