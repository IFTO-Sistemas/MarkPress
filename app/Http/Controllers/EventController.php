<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        $carousel1 = 0;
        $carousel2 = 0;

        return view('home.welcome',['events' => $events, 'carousel1' => $carousel1, 'carousel2' => $carousel2]);
    }
}
