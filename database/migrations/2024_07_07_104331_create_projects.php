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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('shor_name');
            $table->string('title');
            $table->string('img_url');
            $table->string('preview_link');
            $table->text('description');
            $table->text('technologies');
            $table->string('type');
            $table->string('github_link');
            $table->string('live_link');
            $table->string('slug');
            



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
