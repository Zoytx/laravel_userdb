<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;


class User_Controller extends Controller
{
    //

    public function viewUser($id){
        $user=Users::findOrFail($id);
        return view('viewUser',compact('user'));
       

    }


    public function createUser(){
        return view('createUser');

    }



    public function similarInterest(Request $request){
        $users = Users::where('interests','like',$request->interest.'%')->get();
        return view('interests',compact('users'));

    }



    public function saveUser(Request $request){

        $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email|unique:users,email,' . request()->id,
                'password' => 'required'

            ]



        );

        $user=new Users;
        $user->fname=$request->fname;
        
        $user->lname=$request->lname;
        $user->password=$request->password;
        $user->email=$request->email;
        $user->interests=$request->interests;
        $user->save();
        return redirect()->back()->with('success','User saved');
    }    
    public function editUser(Request $request, $id){
        $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email|unique:users,email,' . request()->id,
                'password' => 'required'

            ]



        );
        $user = Users::findOrFail($id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->interests=$request->interests;
        $user->save();
        return redirect('/')->with('success','User Updated');

    }

    public function showUsers(){

        $users=Users::get();
        return view('users',compact('users'));
    }

    public function deleteUser(Request $request, $id){

        $user = Users::findOrFail($id);
        $user->delete();
        return redirect('/')->with('success','User deleted');
    }
}
