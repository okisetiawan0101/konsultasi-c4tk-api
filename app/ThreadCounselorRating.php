<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadCounselorRating extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function thread()
	{
		return $this->hasOne(Thread::class);
	}



	public function store(array $data)
	{
		$threadCounselorRating = new ThreadCounselorRating();
		$threadCounselorRating->thread_id = $data['thread_id'];
		$threadCounselorRating->rating = $data['rating'];
		$threadCounselorRating->save();

		return $threadCounselorRating;
	}
}
