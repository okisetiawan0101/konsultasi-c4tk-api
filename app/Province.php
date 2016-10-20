<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $incrementing = false;
    protected $hidden = ['created_at', 'updated_at'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
