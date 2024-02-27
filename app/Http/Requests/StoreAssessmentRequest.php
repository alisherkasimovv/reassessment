<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssessmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'lecturerId' => ['required'],
            'facultyId' => ['required'],
            'groupId' => ['required'],
            'studentId' => ['required'],
            'subjectId' => ['required'],
            'lessonType' => ['required'],
            'theme' => ['required'],
            'lessonDate' => ['required'],
            'lessonScore' => ['required'],
            'isPassed' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'lecturer_id' => $this->lecturerId,
            'faculty_id' => $this->facultyId,
            'group_id' => $this->groupId,
            'student_id' => $this->studentId,
            'subject_id' => $this->subjectId,
            'lesson_type' => $this->lessonType,
            'lesson_date' => $this->lessonDate,
            'lesson_score' => $this->lessonScore,
            'is_passed' => $this->isPassed,
        ]);
    }
}
