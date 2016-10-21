<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function threads()
	{
		return $this->hasMany(Thread::class);
	}

	public function getCategories()
	{
		return $this->get();
	}
}
