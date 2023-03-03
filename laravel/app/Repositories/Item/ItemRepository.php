<?php

namespace App\Repositories\Item;

use App\Models\Item;
use App\Repositories\BaseRepository;

class ItemRepository extends BaseRepository implements ItemRepositoryInterface
{
    public function getModel()
    {
        return Item::class;
    }

    public function selectItems()
    {
        return $this->model->select('name')->take(5)->get();
    }
}