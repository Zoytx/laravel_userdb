@extends('includes.master')

@section('content')
<h2 style="text-align: center"> User Entry</h2>
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
<form method="post" action="{{route('createUser')}}">
@csrf
<label>First Name</label><br>
<input class="form-control form-control-sm" type="text" name="fname" placeholder="John" value="{{old('fname')}}">
<br>
<label>Last Name</label><br>
<input class="form-control form-control-sm" type="text" name="lname" placeholder="Doe" value="{{old('lname')}}">
<br>
<label>Email address</label><br>
<input class="form-control form-control-sm" type="email" name="email" placeholder="testexp@abc.com" value="{{old('email')}}">
<br>
<label>Password</label><br>
<input class="form-control form-control-sm" type="password" name="password" placeholder="********" value="{{old('password')}}">
<br>
<label>Interests</label><br>
<textarea class="form-control form-control-sm" name="interests" placeholder="Gaming">{{old('interests')}}</textarea>
<br>
<button type="submit" class="btn btn-primary btn-sm">Create User</button>
</form>

<form method="get" action="{{route('showUsers')}}">
    <button style="margin-top: 1%" class="btn btn-primary btn-sm">View all Users</button>

</form>
</div>
@endsection