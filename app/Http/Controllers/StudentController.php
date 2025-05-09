<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Student;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;


//  Display the Student form view.
class StudentController extends Controller
{

public function showStudentForm()
{
return view('Student.studentform'); // Render the form view
}

public function saveStudentForm(Request $request)
{
// print_r($request->all());
$std = new Student;
$std->name = $request->name;
$std->email = $request->email;
$std->password = bcrypt($request->password);
$std->save();

return 'data saved';
}

}
