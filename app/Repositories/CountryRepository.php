<?php
/**
 * Repository for the events
 * php version 7.2
 *
 * @category Repository
 *
 * @package App\Repositories\EventRepository
 *
 * @author Friday Godswill <faradayyg@gmail.com>
 *
 * @license MIT https://opensource.org/licenses/MIT
 * 
 * @link http://figmaafrica.com
 */

namespace App\Repositories;

use App\Repositories\Interfaces\RepositoryInterface;
use App\Models\Country;
use App\Repositories\Common;

class CountryRepository extends Common implements RepositoryInterface
{
    /**
     * Class constructor
     * 
     * @param Model $model The model for DB operations
     */
    public function __construct(Country $model)
    {
        parent::__construct($model);
    }

    /**
     * Fetch all Countries
     * 
     * @return Model
     */
    public function all()
    {
        return $this->model->all();
    }
}
