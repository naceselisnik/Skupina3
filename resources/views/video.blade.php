@extends('layouts.app')

@section('content')
@if(Session::get('user_id'))
	<h3>You are logged in as {{Session::get('name')}} {{Session::get('surname')}}
	@if(Session::get('admin') == 1)
		(admin)
	@endif
	</h3>

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
<h5><b>Author:</b></h5>
{{$user_upload->name}}{{$user_upload->surname}}<br>
<h5><b>Upload date:</b></h5>
<span>{{$video->created_at}}</span><br><br>
<h3>Description:</h3><div style="width: 60%">
{{$video->description}}</div><br>
@if((Session::get('user_id') == $video->user_id) || (Session::get('admin') == 1))
 <a href='/editvideo/{{$video->id}}'>Edit Video</a> <br>
 <a href='/deletevideo/{{$video->id}}'>Delete Video</a> <br>
@endif

<table ><hr class="hr">
<tr><td>@if(Session::get('user_id'))
<a href="/video/{{$video->id}}/like">
@endif
<img src="../image/up.jpg" width="100px" height="100px"></a></td><td>
@if(Session::get('user_id'))
<a href="/video/{{$video->id}}/dislike">
@endif
<img src="../image/down.jpg" width="100px" height="100px"></a></td></tr>
<tr style="height:10px"><td>{{$likes}}</td><td>{{$dislikes}}</td></tr>
</table>
@if(Session::get('user_id'))
<hr class="hr">
<h1>Comments</h1>
<form action="/video/{{$video->id}}/comment/" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table width="50%">
		<tr>
			<td>
				<textarea name="textbox" rows="4" max cols="30" class="fit"></textarea>
			</td>	
		</tr>
	</table>
	<input type="submit" value="Comment" style="width:20%; height:50px; border:1px solid black; text-align:center;">
</form>
@endif
<hr class="hr">
<table width="50%" class=" comments">
<tr>
<?php $video_id = $video->id; ?>
		@foreach($comments as $comment)
			@if($comment->video_id == $video_id)
				<td style=" text-align: left;">
					<b>{{$comment->user}}:</b><br>
				</td>
				<td>
					{{$comment->comment}}
					@if((Session::get('user_id') == $comment->user_id) || (Session::get('admin') == 1))
					<a href='/deletecomment/{{$comment->id}}' class="deletecomment">Delete Comment</a> <br>
					@endif
				</td>
			@endif
			
</tr>
@endforeach	
</table>
</center>

@endsection





