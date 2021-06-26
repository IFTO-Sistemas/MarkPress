<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class PostsController extends Controller
{
    public function search(Request $request){
        $events = Event::all();
    
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = Event::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search.search',['posts' => $posts, 'events' => $events, 'result' => $search]);
    }
    // public function search() {
    //     $events = Event::all();

    //     return view('search.search',['events' => $events]);
    // }
}



