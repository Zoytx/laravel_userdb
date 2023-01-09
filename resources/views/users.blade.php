@extends('includes.master')

@section('content')



        <table style="width:500px; text-align:left">
            <thead>
                <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Actions</th>
                </tr>



            </thead>

            @foreach($users as $user)
            <tbody>
                <tr>
                <td>{{$user->fname}} </td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{route('viewUser',$user->id)}}">View User</a></td>
                </tr>

            </tbody>

            @endforeach

        </table>



         


@endsection