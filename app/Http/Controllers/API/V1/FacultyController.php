<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFacultyRequest;
use App\Http\Requests\UpdateFacultyRequest;
use App\Http\Resources\V1\FacultyCollection;
use App\Http\Resources\V1\FacultyResource;
use App\Services\V1\ObjectQuery;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $obj = new ObjectQuery();
        $includeChildren = $request->query('withChildren');

        $faculties = Faculty::where($obj->transform($request))->get();
        if ($includeChildren)
            $faculties = Faculty::with('groups')->where($obj->transform($request))->get();

        return new FacultyCollection($faculties);
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
    public function store(StoreFacultyRequest $request)
    {
        return new FacultyResource(Faculty::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        return new FacultyResource($faculty);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacultyRequest $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty)
    {
        //
    }
}
