@extends('layouts.app')

@section('content')
@if(Session::get('user_id'))
	<h3>You are logged in as {{Session::get('name')}} {{Session::get('surname')}}</h3>
@endif
<center>
<table>
<td><video width="720" height="360" preload="auto" controls="1">
 <source src="/{{$video->url}}" type="video/mp4" />
 <source src="/{{$video->url}}" type="video/webm" />
 <source src="/{{$video->url}}" type="video/ogg" />
 <p>Fallback text.</p>
 </video>
 </td></table>
<h1>{{$video->title}}</h1>
<h5><b>Upload date:</b></h5>
<span>{{$video->created_at}}</span><br><br>
 <a href='/editvideo/{{$video->id}}'>Edit Video</a> <br>
 <a href='/deletevideo/{{$video->id}}'>Delete Video</a> 

</center>



@endsection





