<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class ThreadCounselorRating extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function thread()
	{
		return $this->hasOne(Thread::class);
	}


	public function store($id, array $data)
	{
		$threadCounselorRating = new ThreadCounselorRating();
		$threadCounselorRating->thread_id = $id;
		$threadCounselorRating->rating = $data['rating'];
		$threadCounselorRating->save();

		return $threadCounselorRating;
	}
}
