<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $fillable = ['steamid'];
	protected $primaryKey = 'id';
	public $incrementing = False;
    //
}
