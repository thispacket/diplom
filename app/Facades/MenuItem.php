<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Services\MenuItemService storeMenuItem(array $data)
 *
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
