<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;



class TodoController extends Controller
{

public function showTaskForm()
{
return view('Todo.createtask');
}   

public function saveTaskForm(Request $request)
{
  // Check if user is authenticated
    if (Auth::check()) {
        $var = new Task;
        $var->task = $request->task;
        $var->user_id = Auth::id();  // Add logged-in user's ID here
        $var->save();

       return redirect()->route('todo.list')->with('Data saved successfully!');
    }

}



 // Fetch task records from the database
public function showTodoList()
{
   
    if (Auth::check()) {
    $user = Auth::user();
    $fetch = Task::where('user_id', $user->id)->get();
    return view('Todo.viewtask', ['grouptodo' => $fetch]);
}
    
}  

// Retrieve a specific task record by ID and pass it to the edit view
public function editTask($id)
{
$find  = Task::find($id);
return View ('Todo.edittask',compact('find'));
}   


//  Update the specified  task record in the database.
public function updateTask(Request $request, $id )
{
$upd  = Task::find($id);
$upd->task = $request->input('task');
$upd->update();
return redirect()->route('todo.list');
}   

//  Delete the specified task record from the database.
public function deleteTask($id)
{
$del =  Task::find($id);
$del->delete();
return redirect()->route('todo.list');
}  
}



