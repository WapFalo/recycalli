<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // index
    public function index()
    {
        return view('about');
    }

}
