<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;


class SchoolController extends Controller
{

// function (schoolForm) simply loads the form view 
public function schoolForm()
{
return view('School.schoolform');
}   

// Handle form input and save school data to the database
public function saveSchool(Request $request)
{
$sch = new School;
$sch->school = $request->school;
$sch->address = $request->address;
$sch->save();
return redirect('school.list');
}


// Fetch all school records from the database and pass them to the 'schoollist' view
public function listSchool()
{
   $fetch  = School::all();
   return View ('School.schoollist', ['groupedschool' => $fetch]);
}   


// Retrieve a specific school record by ID and pass it to the edit view
public function editSchool($id)
{
$find  = School::find($id);
return View ('School.schooledit',compact('find'));
}   

//  Update the specified school record in the database.
public function updateSchool(Request $request, $id )
{
$upd  = School::find($id);
$upd->school = $request->input('school');
$upd->address = $request->input('address');
$upd->update();
return redirect()->route('school.list');
}   


//  Delete the specified school record from the database.
public function delete($id)
{
$del =  School::find($id);
$del->delete();
return redirect()->route('school.list');
}  

}