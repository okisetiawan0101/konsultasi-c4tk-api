<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    protected $hidden = ['created_at', 'updated_at',
                        "village_id",
                        "gender_id",
                        "occupation_id",
                        "education_id",
                        "marital_status_id",
                        "avatar_id",
                        "religion_id",
                        "password"];

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

    public function storeUser(array $data)
    {
        $this->name = $data['name'];
        $this->nick_name = $data['nick_name'];
        $this->email = $data['email'];
        $this->password = bcrypt($data['password']);
        $this->birth_date = $data['birth_date'];
        $this->birth_place = $data['birth_place'];
        $this->address = $data['address'];
        $this->village_id = $data['village_id'];
        $this->gender_id = $data['gender_id'];
        $this->occupation_id = $data['occupation_id'];
        $this->education_id = $data['education_id'];
        $this->marital_status_id = $data['marital_status_id'];
        $this->sinch_id = $data['sinch_id'];
        $this->facebook_id = $data['facebook_id'];
        $this->avatar_id = $data['avatar_id'];
        $this->religion_id = $data['religion_id'];
        $this->profile = $data['profile'];

        $this->save();
    }

    public function updateUser($userId, array $data)
    {
        $user = $this->find($userId);

        if(!$user) {
            return null;
        }

        $user->name = $data['name'];
        $user->nick_name = $data['nick_name'];
        $user->email = $data['email'];
        $user->birth_date = $data['birth_date'];
        $user->birth_place = $data['birth_place'];
        $user->address = $data['address'];
        $user->village_id = $data['village_id'];
        $user->gender_id = $data['gender_id'];
        $user->occupation_id = $data['occupation_id'];
        $user->education_id = $data['education_id'];
        $user->marital_status_id = $data['marital_status_id'];
        $user->sinch_id = $data['sinch_id'];
        $user->facebook_id = $data['facebook_id'];
        $user->avatar_id = $data['avatar_id'];
        $user->religion_id = $data['religion_id'];
        $this->profile = $data['profile'];
        $user->save();

        return $user;
    }

    public function deleteUser($userId)
    {
        $user = $this->find($userId);

        if(!$user) {
            return false;
        }

        $user->delete();

        return true;
    }

    public function showUser($userId)
    {
        $user = $this->with("village.district.city.province")
                ->with("gender")
                ->with("occupation")
                ->with("education")
                ->with("maritalStatus")
                ->with("avatar")
                ->with("religion")
                ->find($userId);

        if(!$user) {
            return null;
        }

        return $user;
    }

    public function login($email, $password)
    {
        if(!(Auth::attempt(['email' => $email, 'password' => $password]))) {
            return null;
        }

        $user = $this->with("village.district.city.province")
                    ->with("gender")
                    ->with("occupation")
                    ->with("education")
                    ->with("maritalStatus")
                    ->with("avatar")
                    ->with("religion")
                    ->where('email', $email)
                    ->get();

        if(!$user) {
            return null;
        }

        return $user;
    }

    public function loginByFB($facebookId)
    {
        $user = $this->with("village.district.city.province")
                    ->with("gender")
                    ->with("occupation")
                    ->with("education")
                    ->with("maritalStatus")
                    ->with("avatar")
                    ->with("religion")
                    ->where('facebook_id', $facebookId)
                    ->get();

        if(!$user) {
            return null;
        }

        return $user;
    }
}
