<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255)->default("title");
            $table->text("description")->nullable();
            $table->unsignedInteger("price");
            $table->unsignedInteger("count");
            $table->unsignedInteger("weight")->nullable();
            $table->unsignedInteger("rating")->nullable();
            $table->string("img_path", 255);
            $table->unsignedBigInteger("category_id")->default(1);
            $table->timestamps();

            $table->foreign("category_id")->references("id")->on("menu_item_categories")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
