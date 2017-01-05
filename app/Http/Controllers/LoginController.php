<?php

namespace App\Http\Controllers;

use Invisnik\LaravelSteamAuth\SteamAuth;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Session;
use Response;

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

        if (is_null($info)) {
            return Response::json(['error' => 'No info'], 400);
        }

        $claims = ['steamid' => $info->steamID64];
        $payload = JWTFactory::make($claims);
        $token = JWTAuth::encode($payload)->get();
        
        return view('jwt_redirect', compact('token'));
        // return view('home', $data);
    }

    public function is_logged() {
        return session('steamid', '');
    }

    public function logout() {
        Session::flush();
        redirect('/');
    }
}
