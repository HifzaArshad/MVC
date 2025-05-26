<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Mail;


class ClientController extends Controller
{

//(1) Show the registration form to the user
public function showUserRegister(){
  return view ('Client.userregister');
}


// (2) Save the registration form in the database
public function saveUserRegister(Request $request){
$exists = User::where('email', $request->email)->first();

if(empty($exists))
{
$user = new User;
$user->name = $request->name;
$user->email = $request->email;
$user->password = bcrypt($request->password);
$user->save();
echo 'User registered successfully.';
}
else
{
echo 'User already exists';
}

}


// (3) Show the Login form to the user
public function showUserLogin()
{
return view('client.userlogin');

}

// (4) handle user login attempt. If credentials are correct, redirect the account route.
public function saveUserLogin(Request $request){
$credentials = ['email' => $request->email, 'password' => $request->password];
if(Auth::attempt($credentials)) 
{
return redirect()->route('task.create');
}
else
{
echo 'incorrect credentials';
}
}


// (5) Display the user's account page if authenticated.
public function showAccount()
{
if(Auth::check())
{
return view('task.viewtask');
}


else
{
return redirect()->route('login.show');  
}
}


// (6) Log Out
public function logout()
{
    Auth::logout();
    return redirect()->route('login.show');
}

}