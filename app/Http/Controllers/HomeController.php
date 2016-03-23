<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;

class HomeController extends Controller 
{
	public function getData() {
		$users = User::all();

		return view('home.index')->with('users', $users);
	}
}