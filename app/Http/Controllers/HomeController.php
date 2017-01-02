<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {
        if (session('steamid', ''))
            return $this->home();
        else
            return view('cover');
    }

    public function home() {
        return view('home');
    }
}
