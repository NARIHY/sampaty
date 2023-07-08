<?php

use App\Models\Blog;
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
        Schema::create('blogs_sampana', function (Blueprint $table) {

            $table->foreignIdFor(Blog::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Sampana::class)->constrained()->cascadeOnDelete();
            $table->primary(['blog_id', 'sampana_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs_sampana');
    }
};
