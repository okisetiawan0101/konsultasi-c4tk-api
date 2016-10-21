<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadUserRating extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function thread()
	{
		return $this->hasOne(Thread::class);
	}


	public function store(array $data)
	{
		$threadUserRating = new ThreadUserRating();
		$threadUserRating->thread_id = $data['thread_id'];
		$threadUserRating->rating = $data['rating'];
		$threadUserRating->save();

		return $threadUserRating;
	}
}
