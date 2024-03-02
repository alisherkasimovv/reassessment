<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssessmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'lecturerId' => $this->lecturer_id,
            'studentId' => $this->student_id,
            'subjectId' => $this->subject_id,
            'lessonType' => $this->lesson_type,
            'theme' => $this->theme,
            'lessonDate' => $this->lesson_date,
            'lessonScore' => $this->lesson_score,
            'isPassed' => $this->is_passed,
            'assessmentDate' => $this->assessment_date
        ];
    }
}
