<?php

namespace App\Services;

use App\Repositories\BaseRepository;

class BaseService implements ServiceInterface
{
    protected $repository;


    public function __construct(BaseRepository $i_repository)
    {
        $this->repository = $i_repository;
    }

    public function selectAllRecord()
    {
        return $this->repository->selectAllRecord();
    }

    public function getById($i_id)
    {
        return $this->repository->getById($i_id);
    }

    public function insertRecord($i_data = [])
    {
        return $this->repository->insertRecord($i_data = []);
    }

    public function updateRecord($i_id, $i_data = [])
    {
        return $this->repository->updateRecord($i_id, $i_data);
    }

    public function deleteRecord($i_id)
    {
        return $this->repository->deleteRecord($i_id);
    }

    public function removeRecord($i_id)
    {
        return $this->repository->removeRecord($i_id);
    }
}
