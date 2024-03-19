<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            "fullName" => ['required'],
            "group_id" => ['required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'full_name' => $this->fullName,
            'group_id' => $this->groupId,
            'study_type' => $this->studyType
        ]);
    }
}
