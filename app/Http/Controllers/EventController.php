<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('events')->with(array('events' => $events));

    }

    public function show($id)
    {
        $event = Event::find($id);

        return view('events-view')->with(array('event' => $event));
    }

    public function create()
    {
        return view('events-create');
    }
    
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $dateTime = $request->input('dateTime');
        $category = $request->input('category');
        $place = $request->input('place');

        $event = new Event();
        $event->name = $name;
        $event->description = $description;
        $event->time = $dateTime;
        $event->organiser_id = Auth::id();
        $event->place = $place;
        $event->category = $category;
        $success = $event->save();

        return Response(array('done' => $success));
    }

}
