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
        Schema::create('searchers', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('profilelink');
            $table->string('avatar');
            $table->integer('game_id');
            $table->string('goal');
            $table->string('server');
            $table->string('gender');
            $table->timestamp('last_online');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('searchers');
    }
};
