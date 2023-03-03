<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * Delete record
     * @param  mixed $i_id
     * @return mixed
     */
    public function delete($i_id);

    /**
     * Insert new record
     * @param  $i_id
     * @param  array $i_data
     * @return mixed
     */
    public function insert($i_id, $i_data = []);
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
    public function remove($i_id);

    /**
     * Select all
     * @return mixed
     */
    public function selectAll();

    /**
     * Update record
     * @param  $i_id
     * @param  array $i_data
     * @return mixed
     */
    public function update($i_id, $i_data = []);

    /**
     * Upsert record
     * @param  $i_id
     * @param  array $i_data
     * @return mixed
     */
    public function upsert($i_id, $i_data = []);
}
