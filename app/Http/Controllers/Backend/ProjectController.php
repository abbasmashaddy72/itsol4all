<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Project');
    }

    public function index()
    {
        return view('pages.backend.projects.index');
    }
}
