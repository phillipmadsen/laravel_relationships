<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller 
{
	public function getUser($username) {
		$user = User::where('name', $username)->first();

		if(!$user) abort(404);

		return view('user.index')->with('user', $user);
	}
}