<?php

namespace App\Http\Controllers;

use Invisnik\LaravelSteamAuth\SteamAuth;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $steam;

    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!$this->steam->validate())
            return $this->steam->redirect();

        $info = $this->steam->getUserInfo();
        if (!is_null($info)) {

            $data = [
                'username'  => $info->personaname,
                'avatar'    => $info->avatarfull,
                'steamid'   => $info->steamID64
            ];

            return view('home', $data);
        }

        return redirect('/');
    }
}
