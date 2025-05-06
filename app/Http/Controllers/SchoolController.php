<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Task;
// use App\Models\Student;
use App\Models\School;


class SchoolController extends Controller
{
public function schoolForm()
{
    return view('Task.schooladdress');

}   

public function saveSchool(Request $request)
{
// print_r($request->all());
$sch = new School;
$sch->school = $request->school;
$sch->address = $request->address;
$sch->save();

return 'data saved';
}


// fetch data
public function list()
{
   $fetch  = School::all();
   return View ('Task.schooladdress', ['groupedschool' => $fetch]);
}   


// update data
public function edit($id)
{
    $find  = School::find($id);
   return View ('Task.edit',compact('find'));
   
}   

public function update(Request $request, $id )
{
    $upd  = School::find($id);
    $upd->school = $request->input('school');
    $upd->address = $request->input('address');
    $upd->update();
    return redirect('list');

}   

// delete data
public function delete($id)
{
   $del =  School::find($id);
   $del->delete();

   return redirect('list');
}  

}