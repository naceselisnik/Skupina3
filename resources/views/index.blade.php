@extends('layouts.app')

@section('content')
@if(Session::get('user_id'))
	<h3>You are logged in as {{Session::get('name')}} {{Session::get('surname')}}
	@if(Session::get('admin') == 1)
		(admin)
	@endif
	</h3>
@endif
<hr>

<table width="100%" border="0">
@foreach($videos as $video)



<tr><td width="25%" ><a href="/video/{{ $video->id }}">
<div class="container1">
  <img src="/{{$video->thumbnail}}" alt="Image not found" class="image1"  height="300px" width="300px">
  <div class="overlay1">
    <div class="text1">{{ $video -> title }}</div>
  </div>
</div>
</a>
<td style="text-align:left;"> <a href="/video/{{ $video->id }}" style="font-size:30px;  text-transform: uppercase;"> <b> {{ $video -> title }} </b> </a><br>
<a href="/video/{{ $video->id }}"> {{ $video -> description }}</a>  
<hr>
<div style="text-align: right">
{{$video->created_at}}</div>
</td>
</tr>
<tr> <td colspan="2"><hr></td> </tr>

@endforeach

</table>



@endsection

