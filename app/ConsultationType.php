<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class ConsultationType extends Model {
	protected $hidden = ['created_at', 'updated_at'];

	public function threads()
	{
		return $this->hasMany(Thread::class);
	}

	public function getConsultationTypes()
	{
		return $this->get();
	}
}
