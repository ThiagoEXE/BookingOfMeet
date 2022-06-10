<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Register
     */
    public function create()
    {
        return view('register');
    }

    public function index(){
        return view('login');
    }
}
