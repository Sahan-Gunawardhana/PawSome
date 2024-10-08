<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    //creates the products table
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pro_name')->nullable();
            $table->decimal('pro_price', total:8, places:2);
            $table->string('pro_keyword')->nullable();
            $table->string('shelf_life');
            $table->string('pro_description');
            $table->string('pro_width');
            $table->string('pro_height');
            $table->string('pro_length');
            $table->string('pro_image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
