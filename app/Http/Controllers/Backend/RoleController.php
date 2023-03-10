<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Role');
    }

    public function index()
    {
        return view('pages.backend.role.index');
    }
}
