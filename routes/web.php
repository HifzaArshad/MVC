<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


// route::redirect('/home', '/');

Route::get('/about/{name}', function ($name) {
    echo "<h3>$name</h3>";
    return view('about');
});

Route::get('/contact', function () {
    return view('page.contact');
    // return "<h3>testing</h3>";
});


 Route::get('/show-task-form', [TaskController::class, 'showTaskForm']);
 
 Route::get('/save-task', [TaskController::class, 'saveTask']);


 Route::get('/show-student-form', [TaskController::class, 'showStudentForm']);
 Route::get('/save-student-form', [TaskController::class, 'saveStudentForm']);