<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class DeleteController extends Controller
{
    
   	public function deletevideo($video)
   	{
   		$videoid = $video;
   		$deletevideo = Video::where('id', $videoid)->first();
   		$deletevideo->delete();

   		return redirect('/');
   	}
}
