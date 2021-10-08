<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('product_name');
            $table->text('product_url');
            $table->string('slug');
            $table->string('partner_name');
            $table->double('price')->nullable();
            $table->integer('discount_percent')->nullable();
            $table->double('discount_price')->nullable();

            $table->text('desc')->nullable();
            $table->string('main_image');
            $table->string('qr_image')->nullable();

            $table->boolean('product_activity')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
