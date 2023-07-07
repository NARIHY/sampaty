<?php

use App\Models\Andraikitra;
use App\Models\Membre;
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
        Schema::create('andraikitra_sampana', function (Blueprint $table) {

            $table->foreignIdFor(Andraikitra::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Membre::class)->constrained()->cascadeOnDelete();
            $table->primary(['andraikitra_id', 'membre_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('andraikitra_sampana');
    }
};
