<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home()
    {
        view()->share('title', 'Home Page');

        return view('pages.backend.static.home');
    }

    public function aboutUs()
    {
        view()->share('title', 'About Us');

        return view('pages.backend.static.aboutUs');
    }

    public function contactUs()
    {
        view()->share('title', 'Contact Us');

        return view('pages.backend.static.contactUs');
    }
}
