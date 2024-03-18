<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Lecturer;
use App\Models\Subject;
use App\Services\V1\ObjectQuery;

class AssessmentController extends Controller
{
    public function index()
    {
        $lecturers = $faculties = $subjects = [];
        foreach (Lecturer::where('is_active', 1)->get() as $item)
        {
            $lecturers[$item['id']] = $item['full_name'] . ", " . $item['degree'];
        }

        foreach (Subject::where('is_active', 1)->get() as $item)
        {
            $subjects[$item['id']] = $item['name'];
        }

        foreach (Faculty::where('is_active', 1)->get() as $item)
        {
            $faculties[$item['id']] = $item['name'];
        }

        return view(
            'assessment',
            [
                'page_title' => "Qayta topshirish",
                'lecturers' => $lecturers,
                'subjects' => $subjects,
                'faculties' => $faculties
            ]
        );
    }
}
