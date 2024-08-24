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
            $table->string('product_name');
            // $table->unsignedBigInteger('owner_id');
            // $table->unsignedInteger('owner_id');
            $table->string('salary');
            $table->string('image');
            $table->string('category', 10);
            $table->timestamps();

            // $table->foreign('owner_id')->references('id')->on('testing');
            // يقوم بانشاء عمود جديد و يجعله فورنكي يذهب الي الآيدي اللي في ال testing
            // $table->foreignId('owner_id')->constrained('testing');
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


