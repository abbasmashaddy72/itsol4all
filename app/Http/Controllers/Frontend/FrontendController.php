<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::get();

        return view('pages.frontend.index', compact('services'));
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
        $teams = User::get();

        return view('pages.frontend.aboutUs', compact('teams'));
    }

    public function contactUs()
    {
        view()->share('title', 'Contact Us');

        return view('pages.frontend.contactUs');
    }
}
