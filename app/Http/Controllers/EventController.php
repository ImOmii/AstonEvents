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

    //Store the likes in opposite order
    public function likes()
    {
        $events = Event::all();
        $events = $events->sortByDesc('likes');

        return view('events')->with(array('events' => $events));
    }
    //Simply to allow the organiser to edit each event made referenced by $id
    public function edit($id)
    {
        $event = Event::find($id);

        return view('events-update')->with(array('event' => $event));
    }

    public function show($id)
    {
        $event = Event::find($id);

        return view('events-view')->with(array('event' => $event));
    }


    //Allow us to get instance of current request and store information inputted
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
        $event->organiser_id = Auth::id(); //access the oraganiser via the Auth facade
        $event->place = $place;
        $event->category = $category;

        if ($request->has('image')) {
            $validator = Validator::make($request->all(),
                array('image' => 'mimes:jpeg,bmp,png') // returns the media types of image so it will process thorugh server
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

    public function create()
    {
        return view('events-create');
    }

    public function update(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $dateTime = $request->input('dateTime');
        $category = $request->input('category');
        $place = $request->input('place');
        $image = $request->input('image');

        $event = Event::find($request->input('eventId'));

        if ($request->has('image')) {
            $validator = Validator::make($request->all(),
                array('image' => 'mimes:jpeg,bmp,png') // returns the media types of image so it will process thorugh server
            );

            if(!$validator->valid()) {
                return redirect()->back()->with('errors', $validator->errors());
            }
            $image = $request->file('image');

            $filename = now()->timestamp . $image->getClientOriginalName();


            $image->move('images', $filename);

            $event->image = $filename;
        }

        $event->name = $name;
        $event->description = $description;
        $event->time = $dateTime;
        $event->organiser_id = Auth::id();
        $event->place = $place;
        $event->category = $category;
        $success = $event->save();

        return redirect()->back()->with('message', 'You have successfully updated the event you made!');
    }

    protected function remove()
    {

    }

}
