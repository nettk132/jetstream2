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
        Schema::create('product_controllers', function (Blueprint $table) {
            $table->string('product_code', 10)->primary();
            $table->string('name_product', 50);
            $table->string('detail_product', 200);
            $table->decimal('price', 12, 2); // ราคาสินค้า (ทศนิยม 2 ตำแหน่ง)
            $table->integer('quantity')->unsigned(); // จำนวนคงเหลือ (จำนวนเต็มบวก)
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
