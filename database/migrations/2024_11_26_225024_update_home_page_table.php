<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('home_page', function (Blueprint $table) {
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();

            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->string('text3')->nullable();
            $table->string('text4')->nullable();
            $table->string('text5')->nullable();
        });
    }

    public function down()
    {
        Schema::table('home_page', function (Blueprint $table) {
            $table->dropColumn(['image1', 'image2', 'image3', 'image4', 'image5']);
            $table->dropColumn(['text1', 'text2', 'text3', 'text4', 'text5']);
        });
    }
};
