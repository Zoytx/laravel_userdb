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

        <table style="width:500px; text-align:left">
            <thead>
                <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Interests</th>
                <th>Actions</th>
                </tr>



            </thead>

            @foreach($users as $user)
            <tbody>
                <tr>
                <td>{{$user->fname}} </td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->interests}}</td>
                <td><a href="{{route('viewUser',$user->id)}}">View User</a></td>
                </tr>

            </tbody>

            @endforeach
 
            

        </table>


        <form action="{{route('fillDetails')}}" method="get">

            @csrf
    
            <button type="submit">Create User</button>
        
        
        
        </form>
         


@endsection