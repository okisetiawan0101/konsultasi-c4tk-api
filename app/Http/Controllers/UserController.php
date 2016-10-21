<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    private function validatorStore($data){
        $validator = Validator::make($data, [
                "name" => "required",
                "nick_name" => "required",
                "email" => "required|unique:users,email",
                "password" => "required",
                "birth_date" => "required",
                "birth_place" => "required",
                "address" => "required",
                "village_id" => "required|exists:villages,id",
                "gender_id" => "required|exists:genders,id",
                "occupation_id" => "required|exists:occupations,id",
                "religion_id" => "required|exists:religions,id",
                "education_id" => "required|exists:educations,id",
                "marital_status_id" => "required|exists:marital_statuses,id",
                "sinch_id" => "required",
                "facebook_id" => "required|unique:users,facebook_id",
                "avatar_id" => "required|exists:avatars,id"
        ]);

        return $validator;
    }

    private function validatorUpdate($id, $data){
        $validator = Validator::make($data, [
            "name" => "required",
            "nick_name" => "required",
            "email" => "required|unique:users,email,{$id},id",
            "birth_date" => "required",
            "birth_place" => "required",
            "address" => "required",
            "village_id" => "required|exists:villages,id",
            "gender_id" => "required|exists:genders,id",
            "occupation_id" => "required|exists:occupations,id",
            "religion_id" => "required|exists:religions,id",
            "education_id" => "required|exists:educations,id",
            "marital_status_id" => "required|exists:marital_statuses,id",
            "sinch_id" => "required",
            "facebook_id" => "required|unique:users,facebook_id,{$id},id",
            "avatar_id" => "required|exists:avatars,id"
        ]);

        return $validator;
    }

    private function validatorLogin($data){
        $validator = Validator::make($data, [
            "email" => "required",
            "password" => "required"
        ]);

        return $validator;
    }

    private function validatorLoginByFB($data){
        $validator = Validator::make($data, [
            "facebookId" => "required"
        ]);

        return $validator;
    }

    public function store(Request $request)
    {
        $data = $request->only("name",
                    "nick_name",
                    "email",
                    "password",
                    "birth_date",
                    "birth_place",
                    "address",
                    "village_id",
                    "gender_id",
                    "occupation_id",
                    "religion_id",
                    "education_id",
                    "marital_status_id",
                    "sinch_id",
                    "facebook_id",
                    "avatar_id",
                    "profile");

        $validator = $this->validatorStore($data);

        if($validator->fails()){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_BAD_REQUEST,
                    'message' => $validator->errors()->first()
                ]
            ],Response::HTTP_BAD_REQUEST);
        }

        $response = DB::transaction(function() use ($data){
            $user = new User();
            $user->storeUser($data);

            return $this->user->showUser($user->id);
        });

        return response()->json([
            self::KEY_DATA=>$response
        ],Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $user = $this->user->showUser($id);

        if(!$user){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => 'User not found'
                ]
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            self::KEY_DATA=>$user
        ],Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only("name",
            "nick_name",
            "email",
            "birth_date",
            "birth_place",
            "address",
            "village_id",
            "gender_id",
            "occupation_id",
            "education_id",
            "marital_status_id",
            "religion_id",
            "sinch_id",
            "facebook_id",
            "avatar_id",
            "profile");

        $validator = $this->validatorUpdate($id, $data);

        if($validator->fails()){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_BAD_REQUEST,
                    'message' => $validator->errors()->first()
                ]
            ], Response::HTTP_BAD_REQUEST);
        }

        $response = DB::transaction(function() use ($data,$id){
            $user = $this->user->updateUser($id, $data);

            if(!$user)
            {
                return null;
            }

            return $this->user->showUser($id);
        });

        if(!$response){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => 'User not found'
                ]
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            self::KEY_DATA=>$response
        ],Response::HTTP_OK);
    }

    public function destroy($id)
    {
        if(!$this->user->deleteUser($id)){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => 'User not found'
                ]
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json(null,Response::HTTP_NO_CONTENT);
    }

    public function login(Request $request)
    {
        $data = $request->only("email",
                    "password");

        $validator = $this->validatorLogin($data);

        if($validator->fails()){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_BAD_REQUEST,
                    'message' => $validator->errors()->first()
                ]
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = $this->user->login($data["email"], $data["password"]);

        if(!$user)
        {
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => 'User not found'
                ]
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            self::KEY_DATA=>$user
        ],Response::HTTP_CREATED);
    }

    public function loginByFB(Request $request)
    {
        $data = $request->only("facebookId");

        $validator = $this->validatorLoginByFB($data);

        if($validator->fails()){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_BAD_REQUEST,
                    'message' => $validator->errors()->first()
                ]
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = $this->user->loginByFB($data["facebookId"]);

        if(!$user)
        {
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => 'User not found'
                ]
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            self::KEY_DATA=>$user
        ],Response::HTTP_CREATED);
    }
}
