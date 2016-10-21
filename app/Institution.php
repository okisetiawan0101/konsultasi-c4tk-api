<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function counselors()
    {
        return $this->hasMany(Counselor::class);
    }
}
