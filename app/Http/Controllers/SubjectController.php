<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        return view(
            'subjects',
            [
                'page_title' => "Fanlar",
                'subjects' => Subject::where('is_active', 1)->paginate(5)
            ]
        );
    }

    public function delete($id)
    {
        Subject::where('id', $id)->update(['is_active' => 0]);
        return redirect('/lecturers');
    }
}
