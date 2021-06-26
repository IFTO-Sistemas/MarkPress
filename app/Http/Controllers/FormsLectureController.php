<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class FormsLectureController extends Controller
{
    public function show($id) {

        $event = Event::findOrfail($id);

        return view('form.show', ['event' => $event]);
    }

}
