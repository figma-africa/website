<?php
namespace App\Repositories;

use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Common;
use App\Models\ChallengeEntry;

class EntryRepository extends Common implements RepositoryInterface
{

    public function __construct(ChallengeEntry $model)
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
        return $this->model->orderBy('created_at', 'desc')->first();
    }
}