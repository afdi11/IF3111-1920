<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
       dd('OK');
    }
    
    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
        $this->validate($request, [
            'name' => 'min:4',
            'email' => 'email|unique:users,email',
            'password' => 'min:6|confirmed'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->back();
    }
}
