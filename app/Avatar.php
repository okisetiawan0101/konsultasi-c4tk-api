<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function counselors()
    {
        return $this->hasMany(Counselor::class);
    }

    public function getAvatars(){
	    return $this->get();
    }
}
