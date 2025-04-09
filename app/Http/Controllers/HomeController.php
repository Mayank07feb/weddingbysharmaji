<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function show()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function events()
    {
        return view('frontend.events');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function about()
    {
        return view('frontend.about');
    }

}
