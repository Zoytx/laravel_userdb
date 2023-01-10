@extends('includes.master')



@section('content')
    <div class="container mt-5">
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


                <form action="{{route('fillDetails')}}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">Add User</button>
                </form>


                <form action="{{route('similarInterest')}}" method="post">
                    @csrf
                <input style="margin-top: 1%" name="interest"  class="form-control form-control-sm" type="text" placeholder="Search Interest">
                 </form>
        </div>
       
@endsection

@section('scripts')



@endsection
