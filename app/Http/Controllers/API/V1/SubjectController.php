<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Http\Resources\V1\SubjectCollection;
use App\Http\Resources\V1\SubjectResource;
use App\Services\V1\ObjectQuery;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $obj = new ObjectQuery();
        $includeChildren = $request->query('withChildren');

        $subjects = Subject::where($obj->transform($request))->get();
        if ($includeChildren)
            $subjects = Subject::with('assessments')->where($obj->transform($request))->get();

        return new SubjectCollection($subjects);
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
    public function store(StoreSubjectRequest $request)
    {
        return new SubjectResource(Subject::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return new SubjectResource($subject);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
