<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Rating;
use App\Comment;
use App\User;
use Session;
class VideoController extends Controller
{
     public function showvideo($video)
    {
    	$video = Video::find($video);
    	$comments = Comment::all();
    	$user_upload = User::where('id',$video->user_id)->first();
    	
    	foreach($comments as $comment)
    	{
    		$user = User::where('id',$comment->user_id)->first();
    		$comment->user = $user->name.$user->surname;
    	}
    	
    	$likes = Rating::where([
    	['rating', '=', 1 ],
    	['video_id', '=', $video->id]])->count();
    	$dislikes = Rating::where([
    	['rating', '=', 0 ],
    	['video_id', '=', $video->id]])->count();

    	return view('video',compact('video','likes','dislikes','comments','user_upload'));
    }
 
    public function like($video)
    {
    	$video = Video::find($video);
	    $id = $video->user_id;
		$user = Session::get('user_id');
		$counter = Rating::where([
    	['user_id', '=', Session::get('user_id') ],
    	['video_id', '=', $video->id]])->count();
		if ($counter == 0)
		{
			$rating = new Rating();
			$rating->video_id = $video->id;
			$rating->user_id = Session::get('user_id');
			$rating->rating = 1;
			$rating->save();
		}
		else
		{
		$like = Rating::where([
    		['user_id', '=', Session::get('user_id') ],
    		['video_id', '=', $video->id]])->get();
		$like[0]->rating = 1;
		$like[0]->update();

		}
		return back();
    }

    public function dislike($video)
    {
    	$video = Video::find($video);
	    $id = $video->user_id;
		$user = Session::get('user_id');
		$counter = Rating::where([
    	['user_id', '=', Session::get('user_id') ],
    	['video_id', '=', $video->id]])->count();
		if ($counter == 0)
		{
			$rating = new Rating();
			$rating->video_id = $video->id;
			$rating->user_id = Session::get('user_id');
			$rating->rating = 0;
			$rating->save();
		}
		else
		{
		$dislike = Rating::where([
    		['user_id', '=', Session::get('user_id') ],
    		['video_id', '=', $video->id]])->get();
		$dislike[0]->rating = 0;
		$dislike[0]->update();

		}
		return back();
    }

    
}
    

