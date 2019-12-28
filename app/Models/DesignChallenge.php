<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class DesignChallenge extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'expiry', 'link', 'challenge_image_link', 'description'];

    /**
     * Return related entries to a challenge
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries()
    {
        return $this->hasMany(\App\Models\ChallengeEntry::class, 'design_challenge_id', 'id');
    }

    /**
     * Accessor to return expiry dateTime as carbon instance
     * 
     * @return \Carbon\Carbon
     */
    public function getCarbonExpiryAttribute()
    {
        try {

            return new Carbon($this->expiry);
        } catch (\Exception $e) {
            return Carbon::now();
        }
    }

    /**
     * Accessor for expiry status
     * 
     * @return string
     */
    public function getExpiryStatusAttribute()
    {
        $expiry = new Carbon($this->expiry);
        if ($expiry->diffInMinutes(Carbon::now(), false) > 1) {
            return true;
        } else {
            return false;
        }
    }
}
