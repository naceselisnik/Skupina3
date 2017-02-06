@extends('layouts.app')

@section('content')
       <center>
            <form action="/registrationForm" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Registration: </h1>
                <br>
                <input type="text" name="name" required="required" placeholder="Name" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <input type="text" name="surname" required="required" placeholder="Surname" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <input type="email" name="mail" required="required" placeholder="Mail" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <input type="password" name="password1" required="required" placeholder="Password" maxlength="20" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <input type="password" name="password2" required="required" placeholder="Confirm Password" maxlength="20" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <input type="submit" value="Sing Up" style="width:20%; height:50px; border:1px solid black; text-align:center;">
                
            </form>
            
            </center>
   

@endsection