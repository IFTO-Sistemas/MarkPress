<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(){
        return view('events');
    }

    public function create(Request $request){
        $lectures = new Lecture();
        $lectures->title = $request->title;
        $lectures->description = $request->description;
        $lectures->content = $request->content;
        $lectures->date = $request->date;
        $lectures->time = $request->time;
        $lectures->save();
    }

}
