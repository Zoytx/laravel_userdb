@extends('includes.master')

@section('content')

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

<form method="post" action="{{route('createUser')}}">
@csrf
<input type="text" name="fname" placeholder="First Name" value="{{old('fname')}}">
<br>
<input type="text" name="lname" placeholder="Last Name" value="{{old('lname')}}">
<br>
<input type="email" name="email" placeholder="Email" value="{{old('email')}}">
<br>
<input type="password" name="password" placeholder="Password" value="{{old('password')}}">
<br>
<textarea name="interests" placeholder="Interests">{{old('interests')}}</textarea>
<br>
<button type="submit">Create User</button>

</form>
<form method="get" action="{{route('showUsers')}}">
<button>View all Users</button>
@endsection