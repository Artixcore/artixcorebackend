<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexHeadersTable extends Migration
{
    public function up()
    {
        Schema::create('index_headers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('media')->nullable(); // for storing video or image file path
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_author')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('index_headers');
    }
}
