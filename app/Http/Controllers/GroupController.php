<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $faculties = Faculty::where('is_active', 1)->get();
        return view(
            'groups',
            [
                'page_title' => "Guruhlar",
                'groups' => Group::whereBelongsTo($faculties)->paginate(10)
            ]
        );
    }

    public function delete($id)
    {
        Group::where('id', $id)->update(['is_active' => 0]);
        return redirect('/lecturers');
    }
}
