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
            $table->integer('user_id');
            $table->string('name');
            $table->string('code');
            $table->foreignId('product_parent_id')->constrained();
            $table->foreignId('product_category_id')->constrained();
            $table->foreignId('product_sub_category_id')->constrained();
            $table->foreignId('product_brand_id')->constrained();
            $table->foreignId('product_manufacturer_id')->constrained();
            $table->foreignId('product_unit_id')->constrained();
            $table->foreignId('product_scan_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->integer('status')->default('1');
            $table->string('certificate')->nullable();
            $table->integer('stock')->nullable();
            $table->string('modelno')->nullable();
            $table->string('brandno')->nullable();
            $table->string('cost')->nullable();
            $table->string('price')->nullable();
            $table->string('warranty')->nullable();
            $table->string('barcode')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
