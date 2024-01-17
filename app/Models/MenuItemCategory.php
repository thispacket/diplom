<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 */
class MenuItemCategory extends Model
{
    use HasFactory;

    public function menuItems(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'category_id', 'id');
    }
}
