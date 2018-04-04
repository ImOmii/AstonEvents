<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function landingIndex()
    {
        return view('landing');
    }
}
