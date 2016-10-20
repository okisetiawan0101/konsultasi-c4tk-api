<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public $incrementing = false;
    protected $hidden = ['created_at', 'updated_at'];

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
