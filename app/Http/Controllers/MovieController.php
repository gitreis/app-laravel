<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie ()
    {
        return view('layout.form.form');
    }
}
