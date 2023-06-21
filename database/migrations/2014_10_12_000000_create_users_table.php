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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email', 150)->unique();
            $table->string('prenon');
            $table->string('picture');
            $table->string('genre');
            $table->string('info');
            $table->string('position');
            $table->string('addresse');
            $table->timestamp('birthday');
            $table->timestamp('date_debut_prenium')->nullable();
            $table->timestamp('date_fin_prenium')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
