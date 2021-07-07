<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/students/register', [StudentController::class, 'index']);
Route::post('/students/register', [StudentController::class, 'store']);

Route::group(["middleware" => ["auth"]], function () {
    Route::get('/teacher/marks', [TeacherController::class, 'marks']);
    Route::patch('/teacher/marks/update', [TeacherController::class, 'updateMarks']);
    Route::post('/teacher/marks/differentiate', [TeacherController::class, 'differentiate']);
    Route::get('/add/projects', [ProjectController::class, 'index']);
    Route::post('/add/projects', [ProjectController::class, 'store']);
});

Route::get('/', [ProjectController::class, 'projectsPage']);

Route::get('/logout', [LoginController::class, 'logout']);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

