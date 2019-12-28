<?php

namespace App\Repositories;

use \Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\RepositoryInterface;

/**
 * Common implementations of all repositories
 * 
 * @author Friday Godswill <faradayyg@gmail.com>
 */
abstract class Common implements RepositoryInterface
{
    
    /**
     * The model oo
     * 
     * @var \Illuminate\Database\Eloquent\Model $model
     */
    protected $model;

    /**
     * Constructor for the class
     * 
     * @param Model $model the model to use
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Set the model of the class
     * 
     * @param Model $model the model to use
     * 
     * @return void
     */
    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieves Object based on it's unique identifier
     *
     * @param integer $id ID of resource to fetch
     * 
     * @return array
     */
    public function fetch($id)
    {
        return $this->model->find($id);
    }

    /**
     * Retrieves all objects
     *
     * @return array
     */
    public function all()
    {
        return $this->model->get();
    }

    /**
     * Creates an object based on properties passed in
     *
     * @param array $data Data to create new resources with
     * 
     * @return array
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Updates unique identifier with data passed in
     *
     * @param integer $id   Id of resource to update
     * @param array   $data Data to update the resource with
     * 
     * @return array
     */
    public function update($id, array $data)
    {
        return [];
    }

    /**
     * Deletes resource identified by unique identifier 
     *
     * @param mixed $id Id of resource to update
     * 
     * @return mixed
     */
    public function delete($id)
    {
        $entity = $this->model->find($id);
        return $entity->delete();
    }

    /**
     * Eager Load related models
     * 
     * @param string $relation Name of relation
     * 
     * @return \App\Repositories\Interfaces\RepositoryInterface
     */
    public function with($relation)
    {
        $this->model->with($relation);
        return $this;
    }

    /**
     * Order Relation By criteria
     * 
     * @param string $criteria Criteria to order results by
     * @param string $order    In what order to return results
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function sortBy($criteria, $order)
    {
        $this->model = $this->model->orderBy($criteria, $order);
        return $this;
    }

    /**
     * Get the count of a related model
     * 
     * @param mixed $relation relation name(s) string or array
     * 
     * @return this
     */
    public function withCount($relation)
    {
        $this->model = $this->model->withCount($relation);
        return $this;
    }
}