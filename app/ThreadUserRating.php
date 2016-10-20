<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadUserRating extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function thread()
    {
        return $this->hasOne(Thread::class);
    }
}
