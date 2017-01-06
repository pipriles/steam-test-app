<?php

namespace App\JWTAuth;

use App\User;

use Tymon\JWTAuth\Providers\Auth\AuthInterface;

class SteamAuth implements AuthInterface {

	protected $user;

	public function __construct() {
		$this->user = null;
	}

	public function byCredentials(array $credentials = []) {

		/** 
		 * There is no credentials 
		 * and i don't think in another
		 * way to do this
		 */

		return false;

	}

	public function byId($id) {

		$user = User::where('steamid', $id) -> first();
		$this->user = $user;

		return is_null($user) ? False : True;
	}


	public function user() {
		return $this->user;
	}
}

?>