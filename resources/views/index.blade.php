@extends('layouts.app')

@section('content')
@if(Session::get('user_id'))
	<h3>You are logged in as {{Session::get('name')}} {{Session::get('surname')}}</h3>
@endif

<table width="100%" border="1">
@foreach($videos as $video)



<tr><td width="25%" ><a href="/video/{{ $video->id }}"><img src="/{{$video->thumbnail}}" height="300px" width="300px" alt="Image not found" /></a>
<td><a href="/video/{{ $video->id }}" style="font-size:30px;"> <b> {{ $video -> title }} </b> </a><br>
<a href="/video/{{ $video->id }}"> {{ $video -> description }}</a></td></tr>


@endforeach
</table>






@endsection


