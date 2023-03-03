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

    public function insert($i_id, $i_data = [])
    {
        return $this->model->find($i_id);
    }

    public function getById($i_id)
    {
        return $this->model->findOrFail($i_id);
    }

    public function remove($i_id)
    {
    }

    public function selectAll()
    {
        return $this->model->all();
    }

    public function update($i_id, $i_data = [])
    {
        $object = $this->getById($i_id);
        return $object->update($i_data);
    }

    public function delete($i_id)
    {
        $object = $this->model->find($i_id);
        return $object->delete();
    }

    public function upsert($i_id, $i_data = [])
    {
        $object = $this->model->find($i_id);
        return $object->upsert();
    }
}
