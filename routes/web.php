<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\systemCtrl;

// ***** Home *****
Route::get('/', function () {
    return view('home');
});


// ***** Pages *****
Route::get('/login', [systemCtrl::class, 'login']);
Route::get('/dashboard', [systemCtrl::class, 'showDashboard']);
Route::get('/projects', [systemCtrl::class, 'showProject']);
Route::get('/lecturers', [systemCtrl::class, 'showLecturer']);
Route::get('/students', [systemCtrl::class, 'showStudent']);
Route::get('/profile', [systemCtrl::class, 'showProfile']);


Route::get('/login', [systemCtrl::class, 'showSignIn']);
Route::get('/logout', [systemCtrl::class, 'showSignOut']);

// ***** CRUD Page *****
Route::get('/editPage/{id}', [systemCtrl::class, 'showEditProject']);

// ***** CRUD Operation *****
Route::POST('/addProject', [systemCtrl::class, 'createProject']);
Route::get('/delProject/{project_id}', [systemCtrl::class, 'delProject']);
Route::POST('/editProject',[systemCtrl::class, 'editProject']);