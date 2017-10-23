<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Stuff;

class StuffController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index($stuff, $title)
    {
    	$title = strtolower(str_ireplace('-', ' ', $title));
    	if($stuff == 'event'){
	    	$event = Event::where('title', $title)->firstOrFail();
	    	if(auth()->id() == $event->user_id){
	    		return view('dashboard.event.event', compact('event'));
	    	}else{
    			return redirect()->back();
    		} 
    	}elseif($stuff == 'responsi'){
	    	return 'belum ada responsi';
	    }elseif($stuff == 'project'){
	    	return 'belum ada project';
	    }else{
	    	// atau tampilkan 404
	    	return redirect('/dashboard');
	    }
    }
}
