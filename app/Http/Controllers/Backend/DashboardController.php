<?php

namespace App\Http\Controllers\Backend;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('Dashboard/Index');
    }
}
