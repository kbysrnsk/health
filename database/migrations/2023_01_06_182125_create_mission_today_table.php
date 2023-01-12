<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_today', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('mission_id');
            $table->string('mission_title');
            $table->string('mission_body');
            $table->string('category_name');
            $table->boolean('achievement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mission_today');
    }
};
