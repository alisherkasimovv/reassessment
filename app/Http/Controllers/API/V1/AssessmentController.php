<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Http\Resources\V1\AssessmentCollection;
use App\Http\Resources\V1\AssessmentResource;
use App\Services\V1\ObjectQuery;
use Illuminate\Http\Request;
use App\Models\Assessment;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $obj = new ObjectQuery();
        if (count($request->all()) == 0)
            return new AssessmentCollection(Assessment::all());
        return new AssessmentCollection(Assessment::where($obj->toArray($request))->get());
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
    public function store(StoreAssessmentRequest $request)
    {
        return new AssessmentResource(Assessment::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Assessment $assessment)
    {
        return new AssessmentResource($assessment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssessmentRequest $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}
