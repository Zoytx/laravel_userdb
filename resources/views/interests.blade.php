@extends('includes.master')

@section('content')


<div class="container mt-5">
        <table id="table" style=" text-align:left">
            <thead>
                <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Interests</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            
                <tr>
                <td>{{$user->fname}} </td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->interests}}</td>
                <td><a href="{{route('viewUser',$user->id)}}">View User</a></td>
                </tr>
            
            @endforeach
        </tbody>
        </table>
        <form method="get" action="{{route('showUsers')}}">
            <button style="margin-top: 1%" class="btn btn-primary btn-sm">View all Users</button>
        
        </form>
    </div>
@endsection