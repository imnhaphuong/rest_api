<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    //khởi tạo
    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function insertRecord( $i_data=[])
    {
        return $this->model->create($i_data);
    }

    public function getById($i_id)
    {
        return $this->model->findOrFail($i_id);
    }

    public function removeRecord($i_id)
    {
    }

    public function selectAllRecord()
    {
        return $this->model->all();
    }

    public function updateRecord($i_id, $i_data = [])
    {
        $object = $this->getById($i_id);
        return $object->update($i_data);
    }

    public function deleteRecord($i_id)
    {
        $object = $this->model->find($i_id);
        return $object->delete();
    }

    public function upsertRecord($i_id, $i_data = [])
    {
        $object = $this->model->find($i_id);
        return $object->upsert();
    }
}
