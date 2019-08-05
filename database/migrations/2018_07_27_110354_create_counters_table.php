<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->unsigned();
            $table->integer('profile_hits_before')->default(0);
            $table->integer('profile_hits_after')->default(0);
            $table->integer('interests_received_before')->default(0);
            $table->integer('interests_received_after')->default(0);
            $table->integer('profiles_clicked')->default(0);
            $table->integer('profiles_view_limit')->default(15);
            $table->integer('interests_sent')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counters');
    }
}
