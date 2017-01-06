<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use Invisnik\LaravelSteamAuth\SteamAuth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
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

        $steamid = $info->steamID64;

        User::firstOrCreate(compact('steamid'));

        $payload = JWTFactory::sub($steamid)->make();
        $token = JWTAuth::encode($payload)->get();
        
        /* Store the token on local storage */
        return view('jwt_redirect', compact('token'));
    }
}
