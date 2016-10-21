<?php
/**
 * Created by PhpStorm.
 * User: edwinnnss
 * Date: 10/22/16
 * Time: 03:37
 */

namespace App\Http\Controllers;


use App\Thread;
use App\ThreadCounselorRating;
use App\ThreadUserRating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;

class ThreadController extends Controller {
	private $thread;
	private $threadUserRating;
	private $threadCounselorRating;

	public function __construct(
		Thread $thread,
		ThreadUserRating $threadUserRating,
		ThreadCounselorRating $threadCounselorRating
	)
	{
		$this->thread = $thread;
		$this->threadUserRating = $threadUserRating;
		$this->threadCounselorRating = $threadCounselorRating;
	}

	private function validatorCreateThread(array $data)
	{
		$validator = Validator::make($data, [
			'category_id' => 'required|integer|exists:categories,id',
			'consultation_type_id' => 'required|integer|exists:consultation_types,id',
			'user_id' => 'required|integer|exists:users,id',
			'counselor_id' => 'required|integer|exists:counselors,id',
			'description' => 'required|string'
		]);

		return $validator;
	}

	private function validatorCloseThread(array $data)
	{
		$validator = Validator::make($data, [
			'thread_id' => 'required|integer|exists:threads,id'
		]);

		return $validator;
	}

	private function validatorRating(array $data)
	{
		$validator = Validator::make($data, [
			'rating' => 'required|integer'
		]);

		return $validator;
	}

	public function show($id)
	{
		$response = $this->thread->showThread($id);

		if (!$response)
		{
			return response()->json([
				self::KEY_ERROR => [
					'code' => Response::HTTP_NOT_FOUND,
					'message' => 'Thread not found'
				]
			], Response::HTTP_NOT_FOUND);
		}

		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_CREATED);
	}

	public function store(Request $request)
	{
		$data = $request->only(
			"category_id",
			"consultation_type_id",
			"user_id",
			"counselor_id",
			"description"
		);

		$validator = $this->validatorCreateThread($data);

		if ($validator->fails())
		{
			return response()->json([
				self::KEY_ERROR => [
					'code' => Response::HTTP_BAD_REQUEST,
					'message' => $validator->errors()->first()
				]
			], Response::HTTP_BAD_REQUEST);
		}

		$response = DB::transaction(function () use ($data)
		{
			$thread = $this->thread->storeThread($data);

			return $this->thread->showThread($thread->id);
		});

		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_CREATED);
	}

	public function close($id)
	{
		$data = array('thread_id' => $id);
		$validator = $this->validatorCloseThread($data);

		if ($validator->fails())
		{
			return response()->json([
				self::KEY_ERROR => [
					'code' => Response::HTTP_BAD_REQUEST,
					'message' => $validator->errors()->first()
				]
			], Response::HTTP_BAD_REQUEST);
		}

		$response = DB::transaction(function () use ($data)
		{
			$this->thread->closeThread($data['id']);

			return null;
		});

		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_NO_CONTENT);
	}

	public function giveUserRating($id, Request $request)
	{
		$data = $request->only('rating');
		$validator = $this->validatorRating($data);

		if ($validator->fails())
		{
			return response()->json([
				self::KEY_ERROR => [
					'code' => Response::HTTP_BAD_REQUEST,
					'message' => $validator->errors()->first()
				]
			], Response::HTTP_BAD_REQUEST);
		}

		$response = DB::transaction(function () use ($id, $data)
		{
			$this->threadUserRating->store($id, $data);

			return null;
		});

		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_NO_CONTENT);
	}

	public function giveCounselorRating($id, Request $request)
	{
		$data = $request->only('rating');
		$validator = $this->validatorRating($data);

		if ($validator->fails())
		{
			return response()->json([
				self::KEY_ERROR => [
					'code' => Response::HTTP_BAD_REQUEST,
					'message' => $validator->errors()->first()
				]
			], Response::HTTP_BAD_REQUEST);
		}

		$response = DB::transaction(function () use ($id, $data)
		{
			$this->threadCounselorRating->store($id, $data);

			return null;
		});

		return response()->json([
			self::KEY_DATA => $response
		], Response::HTTP_NO_CONTENT);
	}

    public function getPaginateThreadsByUserId($userId)
    {
        $threads = $this->thread->getPaginateThreadsByUserId($userId);

        return response()->json([
            self::KEY_DATA=>$threads
        ],Response::HTTP_OK);
    }
}