<?php

namespace App\Http\Resources;

use App\Models\MenuItemCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string $description
 * @property integer $id
 * @property string $title
 * @property integer $price
 * @property integer $count
 * @property string $img_path
 * @property integer $category_id
 * @property string $category
 * @property MenuItemCategory $menuItemCategory
 */
class MenuItemResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'id' => $this->id,
      'title' => $this->title,
      'description' => $this->description,
      'category' => $this->menuItemCategory->name,
      'price' => $this->price,
      'count' => $this->count,
      'img_path' => $this->img_path,
      'category_id' => $this->category_id
    ];
  }
}
