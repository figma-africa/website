<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'country_id', 'state', 'link', 'date', 'time', 'color'];

    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class);
    }
}
