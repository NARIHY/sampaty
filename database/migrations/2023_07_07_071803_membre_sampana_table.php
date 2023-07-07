<?php

use App\Models\Membre;
use App\Models\Sampana;
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
        Schema::create('membres_sampana', function (Blueprint $table){
            $table->foreignIdFor(Sampana::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Membre::class)->constrained()->cascadeOnDelete();
            $table->primary(['sampana_id', 'membre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres_sampana');
    }
};
