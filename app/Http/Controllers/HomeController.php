<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function comingsoon() {
        return view('comingsoon');
    }
}
