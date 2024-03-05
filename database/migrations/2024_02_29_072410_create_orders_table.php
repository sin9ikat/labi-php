<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');

            $table->index('product_id','products_categories_products_idx');
            $table->index('user_id','products_categories_users_idx');

            $table->foreign('product_id','order_product_fk')->on('products')->references('id');
            $table->foreign('user_id','order_user_fk')->on('users')->references('id');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('orders');
    }

};
