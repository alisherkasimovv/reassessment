<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
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
            "name" => ['required'],
            "facultyId" => ['required'],
            "language" => ['required'],
            "grade" => ['required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => $this->name,
            'faculty_id' => $this->facultyId,
            'language' => $this->language,
            'grade' => $this->grade
        ]);
    }
}
