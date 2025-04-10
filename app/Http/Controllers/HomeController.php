<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function contact()
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

    public function packages()
    {
        return view('frontend.packages');
    }

    public function booking()
    {
        return view('frontend.booking');
    }

    public function blogs()
    {
        return view('frontend.blogs');
    }

    public function weddings()
    {
        return view('frontend.weddings');
    }

    public function preWedding()
    {
        return view('frontend.pre-wedding');
    }

    public function portraits()
    {
        return view('frontend.portraits');
    }

    public function products()
    {
        return view('frontend.products');
    }
}
