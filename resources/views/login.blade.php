@extends('includes.master')

@section('content')
<h2 style="text-align: center"> Login</h2>
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
<form action="{{route('adminsignin')}}" method="post">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
</div>
@endsection