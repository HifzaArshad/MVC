<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Mclass;


class GroupController extends Controller
{

// Display the form view to add a new class.
public function showClassForm()
{
return view('Task.classform');
}  

public function saveClassForm(Request $request)
{
$sch = new Mclass;
$sch->class_name = $request->class_name;
$sch->save();
return redirect()->route('class.list');
}  


// Fetch all class records from the database and pass them to the view
public function classlist()
{
$fetch  = Mclass::all();
return View ('Task.classlist', ['grouped' => $fetch]);
}   


// Retrieve a specific class record by ID 
public function editclass($edit_id)
{
$find  = Mclass::find($edit_id);
return View ('Task.classedit',compact('find'));
}   

// Update the specified class record with new data from the request.
public function updateclass(Request $request, $id )
{
$upd  = Mclass::find($id);
$upd->class_name = $request->input('class_name');
$upd->update();
return redirect()->route('class.list');
}   


// delete class record
public function deleteclass($id)
{
$del =  Mclass::find($id);
$del->delete();
return redirect('class-list');
} 


// Show the student form and pass the class ID
public function showstudent($cls_id)
{
return View ('Student.studentform',compact('cls_id'));
}   


// Save the student data submitted from the form
public function savestudent(Request $request)
{
$student = new Student();
// Now, we can use the $id to link the student to the class
$student->class_id = $request->cl_id;
$student->name = $request->name;
$student->email = $request->email;
$student->password = bcrypt($request->password);
$student->save();
return 'data saved successfully';
}


}