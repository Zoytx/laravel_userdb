<?php

namespace App\Http\Controllers;
use App\Models\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function userlogin(){
        return view('login');
    }
    public function usersignin( Request $request){
        $request->validate([
           'email'=>'required',
           'password'=>'required'
        ]);
       if(Auth::guard('admins')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->guest(route('showUsers'));
        }
        else{
            return redirect()->guest(route('login'));
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
       

        Auth::logout();
        return redirect(route('login'));
    }
}
