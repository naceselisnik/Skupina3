<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Comment;
use App\User;

class DeleteController extends Controller
{
    
   	public function deletevideo($video)
   	{
   		$videoid = $video;
   		$deletevideo = Video::where('id', $videoid)->first();
   		$deletecomment = Comment::where('video_id',$videoid);
   		$deletevideo->delete();
   		$deletecomment->delete();

   		return redirect('/');
   	}
   	public function AdminDeleteUser(Request $request)
   	{
   		$deleteuser_id = $request->input('DeleteUserAdmin');
   		$deletevideo = Video::where('user_id',$deleteuser_id);
   		$deletevideo->delete();

   		$deletecomment = Comment::where('user_id',$deleteuser_id);
   		$deletecomment->delete();

   		$upo = User::where('id',$deleteuser_id);
   		$upo->delete();
   		return redirect('/');

   		
   	}
}
