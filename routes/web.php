<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\WebIndexController::class, 'index']);
Route::get('/assess', [\App\Http\Controllers\AssessmentController::class, 'index']);
Route::get('/lecturers', [\App\Http\Controllers\LecturerController::class, 'index']);
Route::get('/lecturers/delete/{id}', [\App\Http\Controllers\LecturerController::class, 'delete']);
Route::get('/subjects', [\App\Http\Controllers\SubjectController::class, 'index']);
Route::get('/subjects/delete/{id}', [\App\Http\Controllers\SubjectController::class, 'delete']);
Route::get('/faculties', [\App\Http\Controllers\FacultyController::class, 'index']);
Route::get('/faculties/delete/{id}', [\App\Http\Controllers\FacultyController::class, 'delete']);
