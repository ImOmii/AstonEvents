<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store($eventId)
    {
        $like = new Like();
        $like->event_id = $eventId;
        $like->save();

        return redirect()->back()->with('message', 'Liked event');
    }
}
