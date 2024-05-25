<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('main.index');

Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create')->middleware('auth');
Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');
Route::get('/groups/{group}', [GroupController::class, 'show'])->name('groups.show');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('students.create')->middleware('auth');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show');

Route::get('/profile', [UserController::class, 'show'])->name('users.show')->middleware('auth');

Auth::routes();