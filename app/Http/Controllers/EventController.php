<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('home')->with('events', $events);
    }
}
