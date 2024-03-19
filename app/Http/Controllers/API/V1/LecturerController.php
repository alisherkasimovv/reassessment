<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLecturerRequest;
use App\Http\Requests\UpdateLecturerRequest;
use App\Http\Resources\V1\LecturerCollection;
use App\Http\Resources\V1\LecturerResource;
use App\Services\V1\ObjectQuery;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $obj = new ObjectQuery();
        $includeChildren = $request->query('withChildren');

        $lecturers = Lecturer::where($obj->transform($request))->paginate();
        if ($includeChildren)
            $lecturers = Lecturer::with('assessments')->where($obj->transform($request))->get();

        return new LecturerCollection($lecturers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLecturerRequest $request)
    {
        return new LecturerResource(Lecturer::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        return new LecturerResource($lecturer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLecturerRequest $request, Lecturer $lecturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
