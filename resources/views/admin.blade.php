@extends('layouts.app')

@section('content')
<center>
            <form action="/adminDeleteUser" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Delete User: </h1>
            
                <select name='DeleteUserAdmin' style="width:20%; height:50px; text-align:center;">
                @foreach($allUsers as $allUser)
                <option value='{{$allUser->id}}'>{{$allUser->name}} {{$allUser->surname}}, {{$allUser->email}}</option>
                @endforeach
                </select><br><br>
                <input type="submit" name="Delete User" value="Delete User" required="required" style="width:20%; height:50px; border:1px solid black; text-align:center;">    
            </form>
            
            </center>
   

@endsection