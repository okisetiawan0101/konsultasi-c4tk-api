<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class City extends Model {
	public $incrementing = false;
	protected $hidden = ['created_at', 'updated_at', 'province_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function districts()
	{
		return $this->hasMany(District::class);
	}

	public function province()
	{
		return $this->belongsTo(Province::class);
	}

	public function getCities($provinceId)
	{
		return $this->where('province_id', $provinceId)->get();
	}
}
