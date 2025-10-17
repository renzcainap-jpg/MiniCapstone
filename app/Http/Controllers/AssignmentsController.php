<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AssignmentsController extends Controller
{
    public function index(): View
    {
        return view('assignments');
    }
}


