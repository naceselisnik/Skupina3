<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class EditController extends Controller
{
    public function edit($video)
    {
    	$video = Video::find($video);
    	return view('edit',compact('video'));
    }
    public function update(Request $request)
    {
    	$id = $request->input('id');
    	$newTitle = $request->input('newTitle');
    	$newDescription = $request->input('newDescription');

    	$video = Video::find($id);
    	$video->title = $newTitle;
    	$video->description = $newDescription;
    	$video->update();

    	return redirect('/');

    }

}
