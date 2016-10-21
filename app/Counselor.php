<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'password'];

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function avatar()
    {
        return $this->belongsTo(Avatar::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
