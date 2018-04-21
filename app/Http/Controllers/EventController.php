<?php

namespace App\Http\Controllers;

use App\Event;
use App\Like;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    public function likes()
    {
        $events = Event::all();
        $events = $events->sortByDesc('likes');

        return view('events')->with(array('events' => $events));
    }

    public function edit($id)
    {
        $event = Event::find($id);

        return view('events-update')->with(array('event' => $event));
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

        if ($request->has('image')) {
            $validator = Validator::make($request->all(),
                array('image' => 'mimes:jpeg,bmp,png')
            );

            if(!$validator->valid()) {
                return redirect()->back()->with('errors', $validator->errors());
            }
            $image = $request->file('image');

            $filename = now()->timestamp . $image->getClientOriginalName();

            $image->move('images', $filename);

            $event->image = $filename;
        }

        $success = $event->save();

        return redirect()->back()->with('message', 'Created event');
    }

    public function update(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $dateTime = $request->input('dateTime');
        $category = $request->input('category');
        $place = $request->input('place');

        $event = Event::find($request->input('eventId'));
        $event->name = $name;
        $event->description = $description;
        $event->time = $dateTime;
        $event->organiser_id = Auth::id();
        $event->place = $place;
        $event->category = $category;
        $success = $event->save();

        return redirect()->back()->with('message', 'Updated event');
    }

}
