<?php

namespace App\Http\Controllers;

use App\Counselor;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CounselorController extends Controller
{
    private $counselor;

    public function __construct(Counselor $counselor)
    {
        $this->counselor = $counselor;
    }

    private function validatorUpdate($id, $data){
        $validator = Validator::make($data, [
            "name" => "required",
            "nick_name" => "required",
            "email" => "required|unique:counselors,email,{$id},id",
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
            "avatar_id" => "required|exists:avatars,id"
        ]);

        return $validator;
    }


    public function show($id)
    {
        $counselor = $this->counselor->showCounselor($id);

        if(!$counselor){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => 'Counselor not found'
                ]
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            self::KEY_DATA=>$counselor
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
            "avatar_id",
            "institution_id",
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
            $counselor = $this->counselor->updateCounselor($id, $data);

            if(!$counselor)
            {
                return null;
            }

            return $this->counselor->showCounselor($id);
        });

        if(!$response){
            return response()->json([
                self::KEY_ERROR => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => 'Counselor not found'
                ]
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            self::KEY_DATA=>$response
        ],Response::HTTP_OK);
    }
}
