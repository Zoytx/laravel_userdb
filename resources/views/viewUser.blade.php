@extends('includes.master')

@section('content')

        <h1>{{$user->fname}} {{$user->lname}}</h1>


        
<form method="post" action="{{route('editUser',$user->id)}}">
    @csrf
    <input type="text" name="fname" placeholder="First Name" value="{{$user->fname}}">
    <br>
    <input type="text" name="lname" placeholder="Last Name" value="{{$user->lname}}">
    <br>
    <input type="email" name="email" placeholder="Email" value="{{$user->email}}">
    <br>
    <input type="password" name="password" placeholder="Password" value="">
    <br>
    <button type="submit">Save</button>
    
    </form>
@endsection