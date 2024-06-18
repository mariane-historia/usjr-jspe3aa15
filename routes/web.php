<?php

use App\Http\Controllers\UniversityController;

Route::get('/show/students/all', [UniversityController::class, 'showAllStudents']);
Route::get('/show/student/{id}', [UniversityController::class, 'showStudent']);
Route::get('/show/colleges', [UniversityController::class, 'showAllColleges']);
Route::get('/show/college/{id}', [UniversityController::class, 'showCollege']);
Route::get('/show/departments', [UniversityController::class, 'showAllDepartments']);
