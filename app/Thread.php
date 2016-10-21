<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model {
	protected $hidden = ['created_at', 'updated_at', 'category_id', 'consultation_type_id', 'user_id', 'counselor_id', 'is_done'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function consultationType()
	{
		return $this->belongsTo(ConsultationType::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function counselor()
	{
		return $this->belongsTo(Counselor::class);
	}

	public function threadCounselorRating()
	{
		return $this->hasOne(ThreadCounselorRating::class);
	}

	public function threadUserRating()
	{
		return $this->hasOne(ThreadUserRating::class);
	}

	public function chats()
	{
		return $this->hasMany(Chat::class);
	}

	public function showThreads()
	{
		return $this->get();
	}

	public function showThread($threadId)
	{
		$thread = $this
			->with('category')
			->with('consultationType')
			->with(['user' => function ($user)
			{
				$user->with(['village' => function ($village)
				{
					$village->with(['district' => function ($district)
					{
						$district->with(['city' => function ($city)
						{
							$city->with('province');
						}]);
					}]);
				}])->with('gender')
					->with('occupation')
					->with('education')
					->with('maritalStatus');
			}])
			->with(['counselor' => function ($counselor)
			{
				$counselor->with(['village' => function ($village)
				{
					$village->with(['district' => function ($district)
					{
						$district->with(['city' => function ($city)
						{
							$city->with('province');
						}]);
					}]);
				}]);
			}])
			->where('is_done', 0)
			->find($threadId);

		return $thread;
	}

	public function storeThread(array $data)
	{
		$thread = new Thread();
		$thread->category_id = $data['category_id'];
		$thread->consultation_type_id = $data['consultation_type_id'];
		$thread->user_id = $data['user_id'];
		$thread->counselor_id = $data['counselor_id'];
		$thread->description = $data['description'];
		$thread->is_done = 0;
		$thread->save();

		return $thread;
	}

	public function closeThread($threadId)
	{
		$thread = $this->find($threadId);
		$thread->is_done = 1;
		$thread->save();
	}
}
