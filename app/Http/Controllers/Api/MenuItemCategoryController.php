<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MenuItemCategory;
use Illuminate\Http\JsonResponse;

class MenuItemCategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $categories = MenuItemCategory::all();

        return response()->json($categories);
    }
}
