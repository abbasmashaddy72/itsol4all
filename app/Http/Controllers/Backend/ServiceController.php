<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Service');
    }

    public function index()
    {
        return view('pages.backend.services.index');
    }
}
