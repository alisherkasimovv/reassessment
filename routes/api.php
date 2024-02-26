<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\API\V1'], function () {
    Route::apiResource('lecturers', \App\Http\Controllers\API\V1\LecturerController::class);
    Route::apiResource('subjects', \App\Http\Controllers\API\V1\SubjectController::class);
    Route::apiResource('groups', \App\Http\Controllers\API\V1\GroupController::class);
    Route::apiResource('faculties', \App\Http\Controllers\API\V1\FacultyController::class);
    Route::apiResource('students', \App\Http\Controllers\API\V1\StudentController::class);
});
