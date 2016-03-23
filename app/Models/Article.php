<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	public function User() {
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function comments() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}