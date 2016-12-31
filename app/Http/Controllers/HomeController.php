<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
    	return;
    }

    public function index() {
    	return view('cover');
    }

    public function home() {
    	return view('home');
    }
}
