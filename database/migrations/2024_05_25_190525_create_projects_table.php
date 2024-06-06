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
            $table->string('number')->unique();
            $table->string('tag');
            $table->string('title');
            $table->string('desc');
            $table->string('industry');
            $table->string('location');
            $table->string('client');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('active_user');
            $table->string('growth');
            $table->string('platform');
            $table->string('type');
            $table->string('image');
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
