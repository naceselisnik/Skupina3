@extends('layouts.app')

@section('content')
@if(Session::get('user_id'))
	<center>

    <form action="/uploadvideo" method="POST" enctype='multipart/form-data'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Upload video:</h1>
        <input type="text" name="title" required="required" placeholder="Title" style="width:20%; height:50px; text-align:center;">
        <br><br>
        <textarea maxlength="1000"   name="description" required="required" placeholder="Description" style="width:20%; height:300px; text-align:center;">
        </textarea>
        <br><br>
        <label>Choose image file:</label><br>
        <input type="file" name="image" required="required">
        <br><br>
        <label>Choose video file:</label><br>
        <input type="file" name="video" required="required">
        <br><br>
        <input type="submit" value="Upload video" style="width:20%; height:50px; border:1px solid black; text-align:center;">
    </form>
            
            </center>
@endif

@endsection