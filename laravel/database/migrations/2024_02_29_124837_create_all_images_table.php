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
        Schema::create('all_images', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->morphs('imageable');
            // $table->bigIncrements('imageable_type')->nullable();
            // $table->bigIncrements('imageable_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_images');
    }
};