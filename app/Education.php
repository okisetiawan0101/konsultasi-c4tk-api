<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class Education extends Model {
	protected $table = 'educations';
	protected $hidden = ['created_at', 'updated_at'];

	public function users()
	{
		return $this->hasMany(User::class);
	}

	public function counselors()
	{
		return $this->hasMany(Counselor::class);
	}

	public function getEducations()
	{
		return $this->get();
	}
}
