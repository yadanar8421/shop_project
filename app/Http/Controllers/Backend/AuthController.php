<?php

namespace App\Http\Controllers\Backend;

class AuthController extends Controller
{
    public function login()
    {
        return inertia('AdminAuth/Login');
    }
}
