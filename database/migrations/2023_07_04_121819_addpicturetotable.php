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
        Schema::table('menafifies', function (Blueprint $table) {
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
        });
        Schema::table('menas', function (Blueprint $table) {
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
        });
        Schema::table('maitsos', function (Blueprint $table) {
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
        });
        Schema::table('mavos', function (Blueprint $table) {
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
