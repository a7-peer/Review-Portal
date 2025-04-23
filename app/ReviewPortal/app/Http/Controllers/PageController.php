<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // Show review page
    public function review()
    {
        return view('review');
    }

    // Show about page
    public function about()
    {
        return view('about');
    }

    // Show login page
    public function contact()
    {
        return view('contact');
    }
}
