<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function users()
	{
		return $this->hasMany(User::class);
	}

	public function counselors()
	{
		return $this->hasMany(Counselor::class);
	}

	public function getMaritalStatuses()
	{
		return $this->get();
	}
}
