@extends('layouts.app')

@section('content')
       <center>
            <form action="/updatevideo" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Edit: </h1>
                <input type="hidden" name="id" value="{{$video->id}}"
                <label>Title:</label>
                <br>
                <input type="text" value="{{$video->title}}" name="newTitle" required="required" 
                placeholder="New Title" style="width:20%; height:50px; text-align:center;">
                <br>
                <br>
                <label>Description:</label>
                <br>
                <textarea maxlength="1000" name="newDescription" value="{{$video->description}}" required="required"  style="width:20%; height:300px; text-align:center";></textarea>
                <br>
                <br>
                <input type="submit" value="edit" style="width:20%; height:50px; border:1px solid black; text-align:center;">
                
            </form>
            
            </center>
   

@endsection