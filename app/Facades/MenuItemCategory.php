<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static \App\Services\MenuItemCategoryService storeCategory(array $data): Builder|Model
 * @method static \App\Services\MenuItemCategoryService updateCategory(array $data, int $id): int
 *
 * @see \App\Services\MenuItemCategoryService
 */
class MenuItemCategory extends Facade
{
  protected static function getFacadeAccessor(): string
  {
    return 'menu_item_category';
  }
}
