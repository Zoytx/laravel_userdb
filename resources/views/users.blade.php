@extends('includes.master')

@section('content')



        <table style="width:500px; text-align:left">
            <thread>
                <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                </tr>



            </thread>

            @foreach($users as $user)
            <tbody>
                <tr>
                <td>{{$user->fname}} </td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                </tr>

            </tbody>

            @endforeach

        </table>



         


@endsection