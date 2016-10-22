<?php

namespace RumahCurhat\Http\Controllers;

use RumahCurhat\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    private $suggestion;

    public function __construct(Suggestion $suggestion)
    {
        $this->suggestion = $suggestion;
    }

    public function getBaseSuggestion()
    {
        $response = $this->suggestion->getBaseSuggestion();
        return response()->json($response);
    }

    public function getSuggestion($suggestionId)
    {
        $response = $this->suggestion->getSuggestion($suggestionId);
        return response()->json($response);
    }
}
