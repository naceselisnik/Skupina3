<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
     public function showvideo($video)
    {
    	$video = Video::find($video);
    	return view('video',compact('video'));
    }
}
