@extends('layouts.app')

@section('content')
       <center>
            <form action="/loggedIn" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Login: </h1>
                
                <br>
                <input type="email" name="email" required="required" placeholder="Email" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <input type="password" name="password" required="required" placeholder="Password" maxlength="20" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <input type="submit" value="Sing In" style="width:20%; height:50px; border:1px solid black; text-align:center;">
                
            </form>
            
            </center>
   

@endsection