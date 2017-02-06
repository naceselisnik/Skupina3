<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\User;
use Illuminate\Support\Facades\Input;

class searchController extends Controller
{
	public function getVideo(){
		
		if (Input::has('search')) {
		    $Search = Input::get('search');
		    $videos = Video::where('title', 'LIKE', '%'.$Search.'%')->orderBy('created_at','desc')->get();
		    
		    return view('index',compact('videos','Search'));
	    }else{
		    $videos = Video::orderBy('created_at','desc')->get();
		    
		    return view('index',compact('videos'));
	    }
	} 
}
