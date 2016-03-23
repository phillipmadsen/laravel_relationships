<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function articles() {
		return $this->hasManyThrough('App\Models\Article', 'App\Models\User', 'country_id', 'user_id');
	}
}