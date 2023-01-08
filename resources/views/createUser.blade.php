@extends('includes.master')

@section('content')

@if(session()->has('success'))
    {{session()->get('success')}}
@endif


<form method="post" action="{{route('createUser')}}">
@csrf
<input type="text" name="fname" placeholder="First Name">
<br>
<input type="text" name="lname" placeholder="Last Name">
<br>
<input type="email" name="email" placeholder="Email">
<br>
<input type="password" name="password" placeholder="Password">
<br>
<button type="submit">Create User</button>

</form>
@endsection