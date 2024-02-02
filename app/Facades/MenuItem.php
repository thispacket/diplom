<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Services\MenuItemService storeMenuItem(array $menuItem): Builder|Model
 * @method static \App\Services\MenuItemService updateMenuItem(array $menuItem, int $id): int
 *
 * @see \App\Services\MenuItemService
 */
class MenuItem extends Facade
{
  protected static function getFacadeAccessor(): string
  {
    return 'menu_item';
  }
}
