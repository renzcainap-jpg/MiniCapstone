<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WorkersController extends Controller
{
    public function index(): View
    {
        return view('workers');
    }
}


