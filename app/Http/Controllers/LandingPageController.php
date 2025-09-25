<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('Landing.index');
    }

    public function about()
    {
        return view('Landing.about');
    }

    public function features()
    {
        return view('Landing.features');
    }
}
