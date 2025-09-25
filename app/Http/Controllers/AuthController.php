<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function login()
    {

    }

    public function verify()
    {
        
    }
}
