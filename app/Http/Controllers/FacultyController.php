<?php

namespace App\Http\Controllers;

use App\Models\Faculty;

class FacultyController extends Controller
{
    public function index()
    {
        return view(
            'faculties',
            [
                'page_title' => "Fakultetlar",
                'faculties' => Faculty::where('is_active', 1)->paginate(10)
            ]
        );
    }

    public function delete($id)
    {
        Faculty::where('id', $id)->update(['is_active' => 0]);
        return redirect('/faculties');
    }
}
