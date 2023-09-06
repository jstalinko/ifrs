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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code' , 50)->unique();
            $table->string('name' , 100);
            $table->string('description' , 255)->nullable();
            $table->integer('price');
            $table->integer('price_modal');
            $table->string('image' , 255)->nullable();
            $table->integer('stock')->default(1);
            // $table->foreignId('category_id')->constrained('categories');
            // $table->foreignId('supplier_id')->constrained('suppliers');
            $table->integer('category_id');
            $table->text('supplier_id');
            
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
