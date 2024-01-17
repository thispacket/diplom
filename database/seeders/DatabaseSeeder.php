<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MenuItem;
use App\Models\MenuItemCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */

  private array $categories = ["All", "Hot Dishes", "Cold Dishes", "Soup", "Grill", "Appetizer", "Dessert"];


  public function run(): void
  {
    foreach ($this->categories as $category) {
      MenuItemCategory::factory()->create([
        'name' => $category
      ]);
    }

    MenuItem::factory(10)->create();
  }
}
