<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\JWTAuth;
use Invisnik\LaravelSteamAuth\SteamAuth;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    private $steam;

    public function __construct(SteamAuth $steam) {
        $this->steam = $steam; // Not useful?
    }

    public function index() {

        if (!$this->steam->validate()) 
            return $this->steam->redirect();

        $info = $this->steam->getUserInfo();
        if (!is_null($info)) {

            $data = [
                'username'  => $info->personaname,
                'avatar'    => $info->avatarfull,
                'steamid'   => $info->steamID64
            ];

            // Create a cookie or a jwt
            // Redirect the user to their home
            session($data);
            return view('home', $data);
        }

        // Let the home do the logic
    }

    public function is_logged() {
        return session('steamid', '');
    }

    public function logout() {
        Session::flush();
        redirect('/');
    }
}
