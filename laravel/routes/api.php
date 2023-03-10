<?php

use App\Repositories\Item\ItemRepository;
use App\Services\Item\ItemService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', function (ItemRepository $i_repository)
{
    return $i_repository->selectAllRecord();
});

Route::get('items/{id}', function ($i_id, ItemRepository $i_repository)
{
    return $i_repository->getById($i_id);
});
