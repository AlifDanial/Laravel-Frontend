<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class CustomAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');

    }
    public function register(Request $request){
        $this->validation($request);
        User::create($request->all());
        return redirect('/index')->with('Status');

    }
    public function validation($request){
        return $this->validate($request,[
            'UserFirstName' => 'required|max:255',
            'UserLastName' => 'required|max:255',
            'UserOccupation' => 'required|max:255',
            'UserEmail' => 'required|email|unique:users|max:255',
            'UserPassword' => 'required|max:255',

        ]);
    }
}
