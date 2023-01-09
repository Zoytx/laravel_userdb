@extends('includes.master')

@section('content')

        <h1>{{$user->fname}} {{$user->lname}}</h1>
   
   
    @if(session()->has('success'))
        {{session()->get('success')}}
    @endif
    @if($errors->any())
    <ul>    
        @foreach($errors->all() as $error)
         <li>   {{$error}} </li>
        @endforeach
    </ul>
    @endif

        
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
    
    <form action="{{route('deleteUser',$user->id)}}" method="POST">

        @csrf

        <button type="submit">Delete user</button>
    
    
    
    </form>

@endsection