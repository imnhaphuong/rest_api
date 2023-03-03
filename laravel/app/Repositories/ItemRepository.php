<?php

namespace App\Repositories;

use App\Models\Item;

class ItemRepository extends BaseRepository
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