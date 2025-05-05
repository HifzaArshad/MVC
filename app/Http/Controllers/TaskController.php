<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Student;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;



class TaskController extends Controller
{
public function showTaskForm()
{
    return view('Task.taskform');

}   

public function saveTask(Request $request)
{
// print_r($request->all());
$var = new Task;
$var->task = $request->task;
$var->save();

return 'data saved';
}


public function showStudentForm()
{
    return view('Task.studentform');

}   


public function saveStudentForm(Request $request)
{
// print_r($request->all());
$std = new Student;
$std->name = $request->name;
$std->email = $request->email;
$std->password = $request->password;
$std->save();

return 'data saved';

}
}


