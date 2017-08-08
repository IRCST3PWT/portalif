<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Stuff;

class EventsController extends Controller
{
	public function stuff($stuff)
	{
		if($stuff == 'event' || $stuff == 'responsi' || $stuff == 'project'){
			$user_id = auth()->id();
			$events = Stuff::where(['user_id' => $user_id, 'type' => $stuff])->latest()->get();
			return view('dashboard.event.index')->with('events', $events)->with('stuff', $stuff);
		}else{
			return redirect('/dashboard');
		}

	}
    public function index($stuff, $title)
    {
    	if($stuff == 'event'){
	    	$event = Event::where('title', $title)->firstOrFail();
	    	if(auth()->id() == $event->user_id){
	    		return view('dashboard.event.detail', compact('event'));
	    	}else{
    			return redirect()->back();
    		} 
    	}elseif($stuff == 'responsi'){
	    	return 'belum ada responsi';
	    }elseif($stuff == 'project'){
	    	return 'belum ada project';
	    }else{
	    	return redirect('/dashboard');
	    }
    }
}
