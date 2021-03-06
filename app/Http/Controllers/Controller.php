<?php

namespace RumahCurhat\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	const KEY_DATA = 'data';
	const KEY_ITEM = 'items';
	const KEY_ERROR = 'error';
	const KEY_CODE = 'code';
	const KEY_MESSAGE = 'message';
}
