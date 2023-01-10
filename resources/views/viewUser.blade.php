@extends('includes.master')

@section('content')
        
    <h2 style="text-align: center">Edit User</h2>
        <h3 style="text-align: center; margin-top:1%">{{$user->fname}} {{$user->lname}}</h3>
   
   
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

    <div class="container">
<form method="post" action="{{route('editUser',$user->id)}}">
    @csrf
    <label>First Name</label><br>
    <input class="form-control form-control-sm" type="text" name="fname" placeholder="First Name" value="{{$user->fname}}">
    <br>
    <label>Last Name</label><br>
    <input class="form-control form-control-sm" type="text" name="lname" placeholder="Last Name" value="{{$user->lname}}">
    <br>
    <label>Email</label><br>
    <input class="form-control form-control-sm" type="email" name="email" placeholder="Email" value="{{$user->email}}">
    <br>
    <label>Password</label><br>
    <input class="form-control form-control-sm" type="password" name="password" placeholder="Password" value="{{$user->password}}">
    <br>
    <label>Interests</label><br>
    <textarea class="form-control form-control-sm" name="interests" placeholder="Interests">{{$user->interests}}</textarea>
    <br>
    <button type="submit" class="btn btn-primary btn-sm">Save</button>

    
    </form>
    
    <form action="{{route('deleteUser',$user->id)}}" method="POST">

        @csrf

        <button style="margin-top: 1%" type="submit" class="btn btn-primary btn-sm">Delete user</button>
    
    
    
    </form>
    <br>


</div>
@endsection