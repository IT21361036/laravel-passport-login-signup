<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        echo "Login endpoint requested";
    }

    public function signup(){
        echo "sign up endpoint requested";
    }

    public function index(){
        echo "index endpoint requested";
    }
}
