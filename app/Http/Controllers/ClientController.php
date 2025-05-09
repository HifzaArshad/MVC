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

// Show the login/registration form to the user
public function showUserLogin(){
  return view ('Client.userlogin');
}

// Show the login/registration form to the user
public function saveUserLogin(Request $request){

$exists = User::where('email', $request->email)->first();
if(empty($exists))
{
$user = new User;
$user->name = $request->name;
$user->email = $request->email;
$user->password = bcrypt($request->password);
$user->save();
echo 'save data';
}
else
{
echo 'user exists';
}
}



// Handle user login attempt
public function handleLogin(Request $request)
{
$credentials = ['email' => $request->email, 'password' => $request->password];
if(Auth::attempt($credentials)) 
{
    return redirect()->route('user.account');
}
else
{
    echo 'incorrect credentials';
}

}

public function showAccount()
{
if(Auth::check())
{


    return view('client.account');

}
else
{

 return redirect()->route('login.show');
    
}

}
}