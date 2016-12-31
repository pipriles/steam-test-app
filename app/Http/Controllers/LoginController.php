<?php

namespace App\Http\Controllers;

use Invisnik\LaravelSteamAuth\SteamAuth;
use Illuminate\Http\Request;

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
            return view('home', $data);
        }

        // Let the home do the logic
    }
}
