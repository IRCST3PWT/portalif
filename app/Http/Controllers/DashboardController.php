<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Stuff;
use App\Event;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        $user = User::find($user_id);
        return view('dashboard.index')->with('stuffs', $user->stuffs);
    }
    public function stuff($stuff)
    {
        if($stuff == 'event' || $stuff == 'responsi' || $stuff == 'project'){
            $user_id = auth()->id();
            $events = Stuff::where(['user_id' => $user_id, 'type' => $stuff])->latest()->get();
            return view('dashboard.index')->with('stuffs', $events);
        }else{
            return redirect('/dashboard');
        }
    }
    public function store()
    {
        Stuff::create([
            'user_id' => auth()->user()->id,
            'title' => request('title'), 
            'description' => request('description'), 
            'type' => request('type')
        ]);
        if(request('type') == 'event')
            Event::create([
                'user_id' => auth()->user()->id,
                'title' => request('title'),
                'panitia' => 'kosong',
            ]);
        elseif(request('type') == 'project')
            Proj::create([
                'user_id' => auth()->user()->id,
                'title' => request('title'), 
                'description' => request('description'), 
            ]);
        // elseif(request('type') == 'responsi')
            
        return redirect()->back();
    }

}
