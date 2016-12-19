@extends('layouts.app')

@section('content')
       <center>
            <form action="/loggedIn" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Login: </h1>
                
                <label>Mail:</label>
                <br>
                <input type="email" name="email" required="required" placeholder="j.anderson@gmail.com*">
                <br>
                <br>
                <label>Password:</label>
                <br>
                <input type="password" name="password" required="required" placeholder="Password*" maxlength="20">
                <br>
                <br>
                <input type="submit" value="Sing In">
                
            </form>
            
            </center>
   

@endsection