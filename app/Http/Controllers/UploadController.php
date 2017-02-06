<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Video;
use Session;

class UploadController extends Controller
{
    public function uploadvideo(Request $request)
	{
			$dt = Carbon::now();
	   		$dt = Carbon::parse($dt)->format('Ymdh');


	   		$title = $request->input('title');
	   		$description = $request->input('description');


	   		$check = Video::where('title',$title)->first();
	   		if(count($check) !=0)
   			{
   				return redirect('/');
   			}
   			else
   			{
				$Videotitle = $title.'.mp4';
				$pot = 'videos/';
				$extension1 = Input::file('video')->getClientOriginalExtension();
				if($extension1 == 'mp4')
				{
					Input::file('video')->move($pot, $Videotitle);
		   			$url = $pot.$Videotitle;
				}
				else
				{
					return redirect('/');
				}
		   		

		   		$name = $title.'.jpg';
				$pot = 'image/';
				$extension = Input::file('image')->getClientOriginalExtension();
				if(($extension == 'png')||($extension == 'jpg'))
				{
					Input::file('image')->move($pot, $name);

		   		$url1 = $pot.$name;

		   		$Video = new Video();
		   		$Video->user_id = Session::get('user_id');
		   		$Video->url = $url;
		   		$Video->title = $title;
		   		$Video->thumbnail = $url1;
		   		$Video->description = $description;
		   		$Video->save();
		   		
				}
				return redirect('/');
				
		   		
	   		}

	}
}
