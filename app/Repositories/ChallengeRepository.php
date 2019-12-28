<?php
namespace App\Repositories;

use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Common;
use App\Models\DesignChallenge;

class ChallengeRepository extends Common implements RepositoryInterface
{

    public function __construct(DesignChallenge $model)
    {
        parent::__construct($model);
    }

    /**
     * Get the latest item in db
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getLatest()
    {
        return $this->model->orderBy('expiry', 'desc')->first();
    }
}