<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // index
    public function index()
    {
        return view('services');
    }
}
