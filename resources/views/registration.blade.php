@extends('layouts.app')

@section('content')
       <center>
            <form action="/registrationForm" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Registration: </h1>
                <label>Name:</label>
                <br>
                <input type="text" name="name" required="required" placeholder="James*">
                <br>
                <br>
                <label>Surname:</label>
                <br>
                <input type="text" name="surname" required="required" placeholder="Anderson*">
                <br>
                <br>
                <label>Mail:</label>
                <br>
                <input type="email" name="mail" required="required" placeholder="j.anderson@gmail.com*">
                <br>
                <br>
                <label>Password:</label>
                <br>
                <input type="password" name="password1" required="required" placeholder="Password*" maxlength="20">
                <br>
                <br>
                <label>Confirm Password:</label>
                <br>
                <input type="password" name="password2" required="required" placeholder="Confirm Password*" maxlength="20">
                <br>
                <br>
                <input type="submit" value="Sing Up">
                
            </form>
            
            </center>
   

@endsection