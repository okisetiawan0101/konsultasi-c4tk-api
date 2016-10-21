<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function users()
	{
		return $this->hasMany(User::class);
	}

	public function counselors()
	{
		return $this->hasMany(Counselor::class);
	}

	public function getGenders()
	{
		return $this->get();
	}
}
