<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // index
    public function index()
    {
        return view('blog');
    }
}
