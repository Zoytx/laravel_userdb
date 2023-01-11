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

@endsection