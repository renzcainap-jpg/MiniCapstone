<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TimelinesController extends Controller
{
    public function index(): View
    {
        return view('timelines');
    }
}


