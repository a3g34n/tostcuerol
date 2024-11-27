<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('home_page', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable(); // Banner image
            $table->string('banner_text')->nullable(); // Banner text
            $table->json('feature_images')->nullable(); // JSON to store 5 images
            $table->json('feature_texts')->nullable(); // JSON to store 5 texts
            $table->string('catchphrase')->nullable(); // Catchphrase text
            $table->timestamps(); // Created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_page');
    }
};
