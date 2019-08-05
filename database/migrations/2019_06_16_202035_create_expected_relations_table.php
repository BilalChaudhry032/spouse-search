<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpectedRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expected_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->date('dob')->nullable();
            $table->unsignedInteger('height_id')->nullable();
            $table->unsignedInteger('education_id')->nullable();
            $table->unsignedInteger('cast_id')->nullable();
            $table->unsignedInteger('sect_id')->nullable();
            $table->unsignedInteger('mother_language_id')->nullable();
            $table->unsignedInteger('occupation_id')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expected_relations');
    }
}
