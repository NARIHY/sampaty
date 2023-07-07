<?php

use App\Models\Actuality;
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
        Schema::create('actuality_sampana', function (Blueprint $table){
            $table->foreignIdFor(Sampana::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Actuality::class)->constrained()->cascadeOnDelete();
            $table->primary(['sampana_id', 'actuality_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sampana', function (Blueprint $table) {
            //
        });
    }
};
