<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsjrController;

Route::get('/show/students/all', [UsjrController::class, 'showAllStudents']);
Route::get('/show/student/{id}', [UsjrController::class, 'showStudent']);
Route::get('/show/colleges', [UsjrController::class, 'showAllColleges']);
Route::get('/show/college/{id}', [UsjrController::class, 'showCollege']);
Route::get('/show/departments', [UsjrController::class, 'showAllDepartments']);
Route::get('/show/programs/{deptId}', [UsjrController::class, 'showProgramsByDepartment']);
Route::get('/', function () {
    return view('welcome'); // Ensure 'welcome.blade.php' exists in 'resources/views'
});
