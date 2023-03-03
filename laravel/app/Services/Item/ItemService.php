<?php

namespace App\Services\Item;

use App\Repositories\Item\ItemRepository;
use App\Repositories\Item\ItemRepositoryInterface;
use App\Services\BaseService;
use App\Services\Item\ItemServiceInterface;

class ItemService extends BaseService implements ItemServiceInterface
{
    public $item_repository;

    public function __construct(ItemRepository $i_repository)
    {
        $this->item_repository = $i_repository;
    }
}