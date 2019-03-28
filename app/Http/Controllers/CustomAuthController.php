<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class CustomAuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('auth.register');

    }

    public function showLoginForm()
    {
        return view('auth.login');

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    public function register(Request $request)
    {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
                'email' => 'required|email|max:255',
                'password' => 'required|max:255',
            ]);
        
            $email = $request['email'];
            $password = $request['password'];
            $credentials = $request->only('email','password');

        if (Auth::attempt($credentials))
        {
            return redirect('/index');
        }
            return redirect('/login');

    }
    
        
    public function validation($request){
        return $this->validate($request,[
            'UserFirstName' => 'required|max:255',
            'UserLastName' => 'required|max:255',
            'UserOccupation' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255|min:6',

        ]);
    }
}
