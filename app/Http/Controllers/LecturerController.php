<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Support\Facades\DB;

class LecturerController extends Controller
{
    public function index()
    {
        return view(
            'lecturers',
            [
                'page_title' => "Ustozlar",
                'lecturers' => Lecturer::where('is_active', 1)->paginate(5)
            ]
        );
    }

    public function delete($id)
    {
        Lecturer::where('id', $id)->update(['is_active' => 0]);
//        $lecturer = Lecturer::where('id', $id)->first();
//        $lecturer->is_active = 0;
//        $lecturer>
        return redirect('/lecturers');
    }
}
