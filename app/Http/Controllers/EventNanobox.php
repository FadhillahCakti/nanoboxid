<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventNanobox extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function eventedit()
    {
    	$events = Event::paginate(10);
    	return view('event.eventedit', ['events' => $events]);
    }

    public function event_tambah()
    {
    	return view('event.event_tambah');
    }

    public function event_store(Request $request)
    {
    	$this->validate($request,[
    		'gambar' => 'required',
    		'judul' => 'required',
			'tanggal' => 'required'
    	]);
 
        Event::create([
    		'gambar' => $request->gambar,
			'judul' => $request->judul,
    		'tanggal' => $request->tanggal
    	]);
 
    	return redirect('/eventedit');
	}

    public function event_edit($id)
	{
   		$events = Event::find($id);
   		return view('event.event_edit', ['events' => $events]);
	}

	public function event_update($id, Request $request)
	{
    	$this->validate($request,[
    		'judul' => 'required',
    		'gambar' => 'required',
    		'tanggal' => 'required'
    ]);
 
    	$events = Event::find($id);
    	$events->judul = $request->judul;
    	$events->gambar = $request->gambar;
    	$events->tanggal = $request->tanggal;
    	$events->save();
    	return redirect('/eventedit');
	}

	public function event_hapus($id)
	{
		$events = Event::find($id);
		$events->delete();
		return redirect('/eventedit');
	}
}
