<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('profile_pic')->default('default.png');
            $table->date('dob');
            $table->integer('age')->nullable();
            $table->string('password');
            $table->boolean('verified')->nullable();
            $table->boolean('soft_delete')->nullable();
            $table->text('about')->nullable();
            $table->boolean('featured')->nullable();
            $table->integer('verification_code')->default(0);

            // Profile For IDpro
            $table->unsignedInteger('profile_fors_id');
            // Mother Language ID
            $table->unsignedInteger('mother_language_id');
            // Religion
            $table->unsignedInteger('religion_id');
            // Martial Status
            $table->unsignedInteger('martial_status_id');
            // Country Status
            $table->unsignedInteger('country_id');
            //State
            $table->unsignedInteger('state_id');
            //State
            $table->unsignedInteger('city_id');
            //Cast
            $table->unsignedInteger('cast_id');
            //Sect
            $table->unsignedInteger('sect_id');
            $table->unsignedInteger('gender_id');

            // Photos
            $table->unsignedInteger('photos_id')->nullable();

            // Education
            $table->unsignedInteger('education_id')->nullable();

            // Education
            $table->unsignedInteger('height_id')->nullable();

            // occupation
            $table->unsignedInteger('occupation_id')->nullable();

            // occupation
            $table->unsignedInteger('income_id')->nullable();

            // occupation
            $table->unsignedInteger('jamaat_id')->nullable();

            // occupation
            $table->unsignedInteger('contact_id')->nullable();

            $table->string('consultant_id')->nullable();

            // Stripe Payments
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            // Stripe Payments


            $table->rememberToken();
            $table->timestamps();

            //Profile For Relation
            $table->foreign('profile_fors_id')->references('id')->on('profile_fors');

            //Profile For Relation
            //  $table->foreign('contact_id')->references('id')->on('contacts');

            // Mother Language Relation
            $table->foreign('mother_language_id')->references('id')->on('mother_languages');

            // Mother Language Relation
            $table->foreign('religion_id')->references('id')->on('religions');

            // Martial Status
            $table->foreign('martial_status_id')->references('id')->on('martial_statuses');

            // Martial Status
            $table->foreign('country_id')->references('id')->on('countries');

            // State
            $table->foreign('state_id')->references('id')->on('states');

            // City
            $table->foreign('city_id')->references('id')->on('cities');

            // Cast
            $table->foreign('cast_id')->references('id')->on('casts');

            // Cast
            $table->foreign('sect_id')->references('id')->on('sects');

            // Gender
            $table->foreign('gender_id')->references('id')->on('genders');

            // Photos
            $table->foreign('photos_id')->references('id')->on('photos');

            // Photos
            $table->foreign('education_id')->references('id')->on('education');

            // Height
            $table->foreign('height_id')->references('id')->on('heights');

            // Income
            $table->foreign('income_id')->references('id')->on('incomes');

            // Occupation
            $table->foreign('occupation_id')->references('id')->on('occupations');

            // Jamaat
            $table->foreign('jamaat_id')->references('id')->on('jamaats');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
