<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DesignChallenge extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'expiry', 'link'];

    /**
     * Return related entries to a challenge
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function entries()
    {
        return $this->hasMany(\App\Models\ChallengeEntry::class, 'design_challenge_id', 'id');
    }
}
