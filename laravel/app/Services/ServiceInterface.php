<?php 

namespace App\Services;

interface ServiceInterface
{
/**
     * Delete record
     * @param  mixed $i_id
     * @return mixed
     */
    public function deleteRecord($i_id);

    /**
     * Insert new record
     * @param  $i_id
     * @param  array $i_data
     * @return mixed
     */
    public function insertRecord($i_data = []);
    /**
     * Get one
     * @param  mixed $i_id
     * @return mixed
     */

    public function getById($i_id);

    /**
     * Remove record
     * @param  mixed $i_id
     * @return mixed
     */
    public function removeRecord($i_id);

    /**
     * Select all
     * @return mixed
     */
    public function selectAllRecord();

    /**
     * Update record
     * @param  $i_id
     * @param  array $i_data
     * @return mixed
     */
    public function updateRecord($i_id, $i_data = []);
}