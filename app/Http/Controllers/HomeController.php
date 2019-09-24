<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function tables()
    {
        return view('/navigation/tables');
    }
    public function profile()
    {
        return view('/navigation/profile');
    }
    public function report()
    {
        return view('/navigation/report');
    }
    public function settings()
    {
        return view('/navigation/settings');
    }
    public function notif()
    {
        return view('/navigation/notif');
    }
    public function icons()
    {
        return view('/navigation/icons');
    }
}
}
