<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // id: an auto-incrementing integer and primary key.

    // product_id: an unsigned integer column to establish a foreign key relationship with the "id" column of the "products" table.

    // quantity: an integer column to store the quantity of products ordered.

    // created_at: a timestamp column to store the creation date and time.

    // updated_at: a timestamp column to store the last update date and time.

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
