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
        Schema::table('products', function (Blueprint $table) {
            $table->string('owner_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('owner_name');
        });
    }
};


/**
 * php artisan make:migration create_table_name_table
 * php artisan make:migration add_column_name_to_table_name
 * php artisan migrate
 * php artisan migrate:rollback
 * php artisan migrate:status
 * php artisan =>
 *      migrate:fresh           Drop all tables and re-run all migrations
 *      migrate:install         Create the migration repository
 *      migrate:refresh         Reset and re-run all migrations
 *      migrate:reset           Rollback all database migrations
 *      migrate:rollback        Rollback the last database migration
 *      migrate:status          Show the status of each migration
 */