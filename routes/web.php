<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\systemCtrl;
// ***** Home *****


// ***** Pages *****
Route::get('/', [systemCtrl::class, 'showHome']);
Route::get('/dashboard', [systemCtrl::class, 'showDashboard']);
Route::get('/projects/{project_id?}', [systemCtrl::class, 'showProject']);
Route::get('/lecturers', [systemCtrl::class, 'showLecturer']);
Route::get('/students/{student_id?}', [systemCtrl::class, 'showStudent']);
Route::get('/profile', [systemCtrl::class, 'showProfile']);

// ***** Login Page *****
Route::get('/login', [systemCtrl::class, 'showSignIn']);
Route::POST('/check', [systemCtrl::class, 'check']);
Route::get('/logout', [systemCtrl::class, 'destroy']);

// ***** CRUD Operation *****
Route::POST('/addProject', [systemCtrl::class, 'createProject']);
Route::get('/projects/delProject/{project_id}', [systemCtrl::class, 'delProject']);
Route::POST('/editProject',[systemCtrl::class, 'editProject']);