<?php

namespace App\Http\Controllers\Api;

use App\Facades\MenuItem as MenuList;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuItem\StoreRequest;
use App\Http\Requests\MenuItem\UpdateRequest;
use App\Http\Resources\MenuItemCollection;
use App\Http\Resources\MenuItemResource;
use App\Models\MenuItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class MenuItemController extends Controller
{

  public function index(): JsonResponse
  {
    $menuItems = MenuItem::all();

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemCollection($menuItems)
    ]);
  }

  public function show(int $id): JsonResponse
  {
    $menuItem = MenuItem::query()->find($id);

    if (!$menuItem) {
      return response()->json([
        'status' => 'error',
        'message' => 'Menu item does not exist!'
      ], 404);
    }

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemResource($menuItem)
    ]);
  }

  public function store(StoreRequest $request): JsonResponse
  {
    $menuItem = MenuList::storeMenuItem($request->validated());

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemResource($menuItem)
    ]);
  }

  public function update(UpdateRequest $request, int $id): JsonResponse
  {
    $menuItem = MenuList::updateMenuItem($request->validated(), $id);

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemResource($menuItem)
    ]);
  }

  public function delete(int $id): JsonResponse
  {
    $menuItem = MenuItem::query()->find($id);

    if ($menuItem) {
      $menuItem->delete();
      return response()->json([
        'status' => 'success',
        'data' => new MenuItemResource($menuItem)
      ]);
    } else {
      return response()->json([
        'status' => 'error',
        'message' => 'Такого элемента нет'
      ], 404);
    }
  }

  public function showMenuItemsByCategory(int $categoryId): JsonResponse
  {
    $menuItems = MenuItem::query()->where('category_id', $categoryId)->get();

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemCollection($menuItems)
    ]);
  }
}
