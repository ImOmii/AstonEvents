<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganiserController extends Controller
{
    public function events()
    {
        $organiserId = Auth::id();

        $events = Event::where('organiser_id', $organiserId)->get();

        return view('categories')->with(array(
            'categoryName' => 'Your events',
            'events' => $events
        ));
    }
}
