<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // view index
    public function index()
    {
        return view('index');
    }
}
