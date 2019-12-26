<?php
namespace App\Repositories\Interfaces;

interface RepositoryInterface
{
    /**
     * Retrieves Object based on it's unique identifier
     *
     * @param integer $id ID of resource to fetch
     * 
     * @return array
     */
    public function fetch($id);

    /**
     * Retrieves all objects
     *
     * @return array
     */
    public function all();

    /**
     * Creates an object based on properties passed in
     *
     * @param array $data Data to create new resources with
     * 
     * @return array
     */
    public function create(array $data);

    /**
     * Updates unique identifier with data passed in
     *
     * @param integer $id   Id of resource to update
     * @param array   $data Data to update the resource with
     * 
     * @return array
     */
    public function update($id, array $data);

    /**
     * Deletes resource identified by unique identifier 
     *
     * @param mixed $id Id of resource to update
     * 
     * @return mixed
     */
    public function delete($id);
}
