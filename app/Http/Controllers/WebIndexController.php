<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Student;
use Illuminate\Contracts\Support\Renderable;

class WebIndexController extends Controller
{
    /**
     * Show the application index page.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('index',
        [
            'page_title' => "Asosiy sahifa",
            'students' => Student::where('is_active', 1)->count(),
            'assessments' => Assessment::where('is_active', 1)->count()
        ]);
    }
}
