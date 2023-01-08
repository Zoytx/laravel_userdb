<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;


class User_Controller extends Controller
{
    //

    public function showUser(){
        $users=Users::get();
       
//dd($users);
        return view('home',compact('users'));
    }


    public function createUser(){
        return view('createUser');

    }

    public function saveUser(Request $request){
       

        $user=new Users;
        $user->fname=$request->fname;
        
        $user->lname=$request->lname;
        $user->password=$request->password;
        $user->email=$request->email;
        $user->save();
        return redirect()->back()->with('success','User saved');
    }    

    public function showUsers(){

        $users=Users::get();
        return view('users',compact('users'));
    }
}
