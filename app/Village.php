<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class Village extends Model {
	public $incrementing = false;
	protected $hidden = ['created_at', 'updated_at', 'district_id'];

	public function district()
	{
		return $this->belongsTo(District::class);
	}

	public function getVillages($districtId)
	{
		return $this->where('district_id', $districtId)->get();
	}
}
