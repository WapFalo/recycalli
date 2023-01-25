<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // index
    public function index()
    {
        return view('contact');
    }
}
