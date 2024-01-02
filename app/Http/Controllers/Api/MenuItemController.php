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
}
