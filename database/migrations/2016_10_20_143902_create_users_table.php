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
            $table->string('facebook_id');
            $table->string('sinch_id');
            $table->string('name');
            $table->string('nick_name');
            $table->string('email');
            $table->string('password');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->text('profile')->nullable();
            $table->string('address');
            $table->char('village_id', 10);
            $table->foreign('village_id')
                ->references('id')
                ->on('villages')
                ->onDelete('cascade');
            $table->unsignedInteger('gender_id');
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders')
                ->onDelete('cascade');
            $table->unsignedInteger('occupation_id');
            $table->foreign('occupation_id')
                ->references('id')
                ->on('occupations')
                ->onDelete('cascade');
            $table->unsignedInteger('education_id');
            $table->foreign('education_id')
                ->references('id')
                ->on('educations')
                ->onDelete('cascade');
            $table->unsignedInteger('marital_status_id');
            $table->foreign('marital_status_id')
                ->references('id')
                ->on('marital_statuses')
                ->onDelete('cascade');
            $table->unsignedInteger('religion_id');
            $table->foreign('religion_id')
                ->references('id')
                ->on('religions')
                ->onDelete('cascade');
            $table->unsignedInteger('avatar_id');
            $table->foreign('avatar_id')
                ->references('id')
                ->on('avatars')
                ->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
