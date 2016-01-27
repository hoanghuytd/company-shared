<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\AuthAPI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {

	/*
		     HuyTDH - 2016/01/26
	*/
	public function getLogin() {
		return view('login');

	}

	public function authen(Request $req, AuthAPI $au) {
		$in = $req->all();
		return $au->authen($in['email'], $in['password']);
	}
}
