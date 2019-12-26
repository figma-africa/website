<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChallengeEntry extends Model
{
    protected $fillable = ['name', 'design_challenge_id', 'email', 'link'];
}
