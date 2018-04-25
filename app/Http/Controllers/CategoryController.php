<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($categoryName)
    {
        //Make this string Uppercase at all times when inputted into database
        $categoryName = strtoupper($categoryName);

        $events = Event::where('category', $categoryName)->get();

        return view('categories')->with(array(
            'categoryName' => $categoryName,
            'events' => $events
        ));
    }
}
