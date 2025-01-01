<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tags', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamps();
    });

    // Pivot table for many-to-many relationship between Articles and Tags
    Schema::create('article_tag', function (Blueprint $table) {
        $table->id();
        $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        $table->foreignId('tag_id')->constrained()->onDelete('cascade');
        
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
