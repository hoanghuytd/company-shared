<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;

class AuthAPI extends Controller {
	public function authen($email, $password) {
		$user = User::find(1);
		// // where('email',$in["email"])->first();
		$pasAuth = $user->getAuthPassword();
		// return $password;
		if ($user['email'] == $email && $pasAuth == $password) {
			return $user;
		}

		return "FAIL";
		// {
		//  return response()->json($user['name'],200)
		// ->setCallback($request->input('callback'));
		// }
		// return response()->json('LOGIN FAIL!',401)
		// ->setCallback($request->input('callback'));
	}
}
