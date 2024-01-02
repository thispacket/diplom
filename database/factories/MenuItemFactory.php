<?php

namespace Database\Factories;

use App\Models\MenuItem;
use App\Models\MenuItemCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = MenuItem::class;

    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(1, 100),
            'count' => fake()->numberBetween(1, 100),
            'img_path' => fake()->imageUrl(),
            'category_id' => MenuItemCategory::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
