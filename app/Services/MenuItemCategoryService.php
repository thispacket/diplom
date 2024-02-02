<?php

namespace App\Services;

use App\Models\MenuItemCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MenuItemCategoryService
{
  public function storeCategory(array $data): Model|Builder
  {
    return MenuItemCategory::query()->create($data);
  }

  public function updateCategory(array $data, int $id): int
  {
    return MenuItemCategory::query()->where('id', $id)->update($data);
  }

}
