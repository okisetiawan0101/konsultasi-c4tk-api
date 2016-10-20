<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $hidden = ['updated_at'];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
