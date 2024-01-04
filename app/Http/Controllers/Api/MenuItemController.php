<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class MenuItemController extends Controller
{
    public function index(): JsonResponse
    {
        $menuItems = MenuItem::all();

        return response()->json($menuItems);
    }

    public function show(int $id): JsonResponse
    {
        $menuItem = MenuItem::query()->find($id);
        return response()->json($menuItem);
    }

    public function showMenuItemsByCategory(int $categoryId): JsonResponse
    {
        $menuItems = MenuItem::query()->where('category_id', $categoryId)->get();
        return response()->json($menuItems);
    }
}
