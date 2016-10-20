<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function consultationType()
    {
        return $this->belongsTo(ConsultationType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function counselor()
    {
        return $this->belongsTo(Counselor::class);
    }

    public function threadCounselorRating()
    {
        return $this->hasOne(ThreadCounselorRating::class);
    }

    public function threadUserRating()
    {
        return $this->hasOne(ThreadUserRating::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
}
