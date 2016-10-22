<?php

namespace RumahCurhat;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    const KEY_DATA = 'data';
    const KEY_ITEMS = 'items';

    protected $hidden = ['created_at', 'updated_at', 'parent_id'];


    public function getBaseSuggestion()
    {
        $response = $this->with('parent')
            ->with('childs')
            ->with('councelors')
            ->whereNull('parent_id');
        return [self::KEY_DATA => [self::KEY_ITEMS => $response->get()]];
    }

    public function getSuggestion($suggestionId)
    {
        $response = $this->with('parent')
            ->with('childs')
            ->with('councelors')
            ->where('id', $suggestionId);
        return [self::KEY_DATA => $response->get()];
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
