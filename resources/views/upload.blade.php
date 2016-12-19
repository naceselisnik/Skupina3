@extends('layouts.app')

@section('content')
@if(Session::get('user_id'))
	<center>

    <form action="/uploadvideo" method="POST" enctype='multipart/form-data'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Upload video:</h1>
        <label>Title:</label><br>
        <input type="text" name="title" required="required">
        <br><br>
        <label>Description:</label><br>
        <textarea rows="4" max cols="30"  name="description" required="required">
        </textarea>
        <br><br>
        <label>Choose image file:</label><br>
        <input type="file" name="image" required="required">
        <br><br>
        <label>Choose video file:</label><br>
        <input type="file" name="video" required="required">
        <br><br>
        <input type="submit" value="Upload video">
    </form>
            
            </center>
@endif

@endsection