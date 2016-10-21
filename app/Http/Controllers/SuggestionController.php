<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    private $suggestion;

    public function __construct(Suggestion $suggestion)
    {
        $this->suggestion = $suggestion;
    }

    public function getSuggestion($suggestionId)
    {
        $response = $this->suggestion->getSuggestion($suggestionId);
        return response()->json($response);
    }
}
