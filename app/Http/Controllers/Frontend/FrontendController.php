<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }

    public function projects()
    {
        view()->share('title', 'Projects');

        return view('pages.frontend.projects');
    }

    public function projectSingle()
    {
        view()->share('title', 'Project Single');

        return view('pages.frontend.projectSingle');
    }

    public function aboutUs()
    {
        view()->share('title', 'About Us');

        return view('pages.frontend.aboutUs');
    }

    public function contactUs()
    {
        view()->share('title', 'Contact Us');

        return view('pages.frontend.contactUs');
    }
}
