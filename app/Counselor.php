<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Counselor extends Model
{
    protected $hidden = ['created_at', 'updated_at',
        "village_id",
        "gender_id",
        "occupation_id",
        "education_id",
        "marital_status_id",
        "religion_id",
        "avatar_id",
        "institution_id",
        'password'];

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

    public function updateCounselor($counselorId, array $data)
    {
        $counselor = $this->find($counselorId);

        if(!$counselor) {
            return null;
        }

        $counselor->name = $data['name'];
        $counselor->nick_name = $data['nick_name'];
        $counselor->email = $data['email'];
        $counselor->birth_date = $data['birth_date'];
        $counselor->birth_place = $data['birth_place'];
        $counselor->address = $data['address'];
        $counselor->village_id = $data['village_id'];
        $counselor->gender_id = $data['gender_id'];
        $counselor->occupation_id = $data['occupation_id'];
        $counselor->education_id = $data['education_id'];
        $counselor->marital_status_id = $data['marital_status_id'];
        $counselor->sinch_id = $data['sinch_id'];
        $counselor->avatar_id = $data['avatar_id'];
        $counselor->religion_id = $data['religion_id'];
        $counselor->institution_id = $data['institution_id'];
        $this->profile = $data['profile'];
        $counselor->save();

        return $counselor;
    }

    public function showCounselor($counselorId)
    {
        $counselor = $this->with("village.district.city.province")
            ->with("gender")
            ->with("occupation")
            ->with("education")
            ->with("maritalStatus")
            ->with("avatar")
            ->with("religion")
            ->with("institution")
            ->find($counselorId);

        if(!$counselor) {
            return null;
        }

        $counselor->rating = $this->getRating($counselor->id);

        return $counselor;
    }

    public function login($email, $password)
    {
        $hashPassword = DB::table("counselors")->where("email",$email)->select("password")->first();

        if(!$hashPassword)
        {
            return null;
        }

        if(!Hash::check($password, $hashPassword->password))
        {
            return null;
        }

        $counselor = $this->with("village.district.city.province")
            ->with("gender")
            ->with("occupation")
            ->with("education")
            ->with("maritalStatus")
            ->with("avatar")
            ->with("religion")
            ->with("institution")
            ->where('email', $email)
            ->first();

        if(!$counselor) {
            return null;
        }

        $counselor->rating = $this->getRating($counselor->id);

        return $counselor;
    }

    private function getRating ($counselorId) {
        $rating = DB::table("thread_counselor_ratings")
            ->join('threads', 'threads.id', '=', 'thread_counselor_ratings.thread_id')
            ->where('threads.counselor_id', $counselorId)
            ->avg("rating");

        return $rating;
    }
}
