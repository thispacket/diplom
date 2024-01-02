<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{
    use HasFactory;


    public function menuItemCategory(): BelongsTo
    {
        return $this->belongsTo(MenuItemCategory::class, 'category_id', 'id');
    }
}
