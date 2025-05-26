<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Task;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;


//  Display the task form view.
class TaskController extends Controller
{

public function showTaskForm()
{
return view('Task.taskform');
}   

public function saveTaskForm(Request $request)
{
// print_r($request->all());
$var = new Task;
$var->task = $request->task;
$var->save();

return 'data saved';
}

}


