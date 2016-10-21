<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadCounselorRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread_counselor_ratings', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('thread_id');
	        $table->foreign('thread_id')
		        ->references('id')
		        ->on('threads')
		        ->onDelete('cascade');
	        $table->integer('rating');
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
        Schema::dropIfExists('thread_counselor_ratings');
    }
}
