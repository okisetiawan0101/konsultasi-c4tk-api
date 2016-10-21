<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    const KEY_DATA = 'data';

    protected $hidden = ['created_at', 'updated_at'];

    public function getSuggestion($suggestionId)
    {
        $response = $this->with('parent')
            ->with('childs')
            ->with('councelors')
            ->where('id', $suggestionId);
        return [self::KEY_DATA => $response];
    }

    public function parent()
    {
        return $this->hasOne(Suggestion::class, "id", "parent_id");
    }

    public function childs()
    {
        return $this->hasMany(Suggestion::class, "parent_id", "id");
    }

    public function councelors()
    {
        return $this->belongsToMany(Counselor::class, "suggestion_counselor", "suggestion_id");
    }
}
