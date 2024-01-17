<?php

use App\Http\Controllers\Api\MenuItemCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/menu', [MenuItemController::class, 'index']);
Route::get('/menu/item/{id}', [MenuItemController::class, 'show']);
Route::post('/menu/item', [MenuItemController::class, 'store']);
Route::get('/menu/item/category/{id}', [MenuItemController::class, 'showMenuItemsByCategory']);



Route::get('/menu/categories', [MenuItemCategoryController::class, 'index']);
Route::get('/menu/categories/{id}', [MenuItemCategoryController::class, 'show']);
