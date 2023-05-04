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
            $table->integer('game_id');
            $table->integer('goal_id');
            $table->integer('server_id');
            $table->integer('gender_id');
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
