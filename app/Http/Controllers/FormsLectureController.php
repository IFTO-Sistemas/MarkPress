<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsLectureController extends Controller
{
    public function formlecture() {
        return view('form.form');
    }
}
