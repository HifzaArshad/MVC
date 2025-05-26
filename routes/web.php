<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TodoController;
use  App\Http\Middleware\Age;

// Home and Basic Pages
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('page.home');
});

// Dynamic About Page
Route::get('/about/{name}', function ($name) {
    echo "<h3>$name</h3>";
    return view('about');
});

// Contact Page
Route::get('/contact', function () {
    return view('page.contact');
});

// Task Routes via TaskController and Route Midlleware
Route::get('/show-task-form', [TaskController::class, 'showTaskForm'])->middleware(Age::class);
Route::get('/save-task-form', [TaskController::class, 'saveTaskForm']);

// Student Form Routes via  StudentController
Route::get('/show-student-form', [StudentController::class, 'showStudentForm'])->name('student.show');
Route::get('/save-student-form', [StudentController::class, 'saveStudentForm'])->name('student.save');

// School Routes
Route::get('/school-location', [SchoolController::class, 'schoolForm'])->name('school.form');
Route::post('/save-school-form', [SchoolController::class, 'saveSchool'])->name('school.save');

// School Data Handling Routes
Route::get('/school-list', [SchoolController::class, 'listSchool']);
Route::get('/edit-school/{id}', [SchoolController::class, 'editSchool'])->name('school.edit');
Route::put('/update-school/{id}', [SchoolController::class, 'updateSchool'])->name('school.edit');
Route::get('/delete-school/{id}', [SchoolController::class, 'delete'])->name('school.delete');

// Class Routes via GroupController
Route::get('/show-class', [GroupController::class, 'showClassForm'])->name('class.show');
Route::post('/save-class', [GroupController::class, 'saveClassForm'])->name('class.save');
Route::get('/class-list', [GroupController::class, 'classlist'])->name('class.list');
Route::get('/edit-class/{id}', [GroupController::class, 'editclass'])->name('class.edit');
Route::put('/update-class/{id}', [GroupController::class, 'updateclass'])->name('class.update');
Route::get('/delete-class/{id}', [GroupController::class, 'deleteclass'])->name('class.delete');

// Student Routes via HController
Route::get('/show-student/{id}', [GroupController::class, 'showstudent'])->name('studentclass.show');
Route::post('/save-student', [GroupController::class, 'savestudent'])->name('studentclass.save');

// client Routes 
Route::get('/show-register', [ClientController::class, 'showUserRegister'])->name('register.show');
Route::post('/save-register', [ClientController::class, 'saveUserRegister'])->name('register.save');
Route::get('/show-login', [ClientController::class, 'showUserLogin'])->name('login.show');
Route::post('/save-login', [ClientController::class, 'saveUserlogin'])->name('login.save');
Route::get('/account', [ClientController::class, 'showAccount'])->name('account.show');
Route::get('/logout', [ClientController::class, 'logout'])->name('logout');




// Todo Routers
Route::get('/create-task', [TodoController::class, 'showTaskForm'])->name('task.create');
Route::post('/save-todo-task', [TodoController::class, 'saveTaskForm'])->name('task.save');
Route::get('/todo-list', [TodoController::class, 'showTodoList'])->name('todo.list');
Route::get('/edit-task/{id}', [TodoController::class, 'editTask'])->name('task.edit');
Route::put('/update-task/{id}', [TodoController::class, 'updateTask'])->name('task.update');
Route::get('/delete-task/{id}', [TodoController::class, 'deleteTask'])->name('task.delete');


function p($data)
{
}

