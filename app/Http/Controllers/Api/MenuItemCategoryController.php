<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuItemCategory\StoreRequest;
use App\Http\Resources\MenuItemCategoriesCollection;
use App\Http\Resources\MenuItemCategoryResource;
use App\Models\MenuItemCategory;
use App\Facades\MenuItemCategory as MenuListCategory;
use Illuminate\Http\JsonResponse;

class MenuItemCategoryController extends Controller
{
  public function index(): JsonResponse
  {
    $categories = MenuItemCategory::all();

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemCategoriesCollection($categories)
    ]);
  }


  public function show(int $id): JsonResponse
  {
    $category = MenuItemCategory::query()->find($id);

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemCategoryResource($category)
    ]);
  }

  public function store(StoreRequest $request): JsonResponse
  {
    $category = MenuListCategory::storeCategory($request->validated());

    return response()->json([
      'status' => 'success',
      'data' => new MenuItemCategoryResource($category)
    ]);
  }
}
