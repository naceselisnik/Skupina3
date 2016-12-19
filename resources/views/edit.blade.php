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
                placeholder="New Title">
                <br>
                <br>
                <label>Description:</label>
                <br>
                <input type="text" name="newDescription" value="{{$video->description}}" required="required" placeholder="New Description">
                <br>
                <br>
                <input type="submit" value="edit">
                
            </form>
            
            </center>
   

@endsection