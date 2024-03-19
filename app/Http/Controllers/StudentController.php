<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $groups = Group::where('is_active', 1)->get();
        return view(
            'students',
            [
                'page_title' => "O'quvchilar",
                'students' => Student::whereBelongsTo($groups)->paginate(20),
                'groups' => Group::where('is_active', 1)->get()
            ]
        );
    }

    public function delete($id)
    {
        Student::where('id', $id)->update(['is_active' => 0]);
        return redirect('/students');
    }
}
