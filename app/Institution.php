<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function counselors()
	{
		return $this->hasMany(Counselor::class);
	}

	public function getInstitutions()
	{
		return $this->get();
	}
}
