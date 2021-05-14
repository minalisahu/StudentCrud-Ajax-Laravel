<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-student', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/add-student-details', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::post('/edit-student-details', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
Route::post('/update-student-details', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
Route::get('/show/{student}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show');
