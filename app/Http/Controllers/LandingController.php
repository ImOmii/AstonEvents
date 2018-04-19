<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function landingIndex()
    {
        $events = Event::all();

        return view('landing')->with(array('events' => $events));
    }
}
