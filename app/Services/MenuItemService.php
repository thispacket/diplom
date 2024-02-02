<?php

namespace App\Services;

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class MenuItemService
{
  public function storeMenuItem(array $menuItem): Builder|Model
  {
    return MenuItem::query()->create($menuItem);
  }

  public function updateMenuItem(array $menuItem, int $id): int
  {
    return MenuItem::query()->where('id', $id)->update($menuItem);
  }
}
