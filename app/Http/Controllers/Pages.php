<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class Pages extends Controller
{
    public function index()
    {
        return view('index', []);
    }
}
