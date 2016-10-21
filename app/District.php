<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model {
	public $incrementing = false;
	protected $hidden = ['created_at', 'updated_at'];

	public function villages()
	{
		return $this->hasMany(Village::class);
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function getDistricts($cityId)
	{
		return $this->where('city_id', $cityId)->get();
	}
}
