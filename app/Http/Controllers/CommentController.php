<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Session;

class CommentController extends Controller
{
     public function comment($video , Request $request)
    {
    	$comment = $request->input('textbox');
    	$comment1 = new Comment();
    	$comment1->video_id = $video;
    	$comment1->user_id = Session::get('user_id');
    	$comment1->comment = $comment;
    	$comment1->save();
    	return back();
    }
    public function delete($comment)
    {
    	$commentid = $comment;
   		$deletecomment = Comment::where('id', $commentid)->first();
   		$deletecomment->delete();

   		return back();
    }

}
