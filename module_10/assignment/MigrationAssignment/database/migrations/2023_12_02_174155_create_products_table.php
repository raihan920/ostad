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

    // name: a string column to store the product name.

    // price: a decimal column to store the product price.

    // description: a text column to store the product description.

    // created_at: a timestamp column to store the creation date and time.

    // updated_at: a timestamp column to store the last update date and time.

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price',10,2);
            $table->integer('quantity')->nullable();
            $table->text('description');
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
