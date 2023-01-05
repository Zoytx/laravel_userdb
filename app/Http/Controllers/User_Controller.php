<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;


class User_Controller extends Controller
{
    //

    public function showUsers(){
        $users=Users::get();
        $name="Saad Rasheed";
//dd($users);
        return view('home',compact('users'));
    }
}
