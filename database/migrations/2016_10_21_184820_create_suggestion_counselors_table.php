<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionCounselorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestion_counselors', function (Blueprint $table) {
            $table->unsignedInteger('suggestion_id');
            $table->foreign('suggestion_id')
                ->references('id')
                ->on('suggestions')
                ->onDelete('cascade');
            $table->unsignedInteger('counselor_id');
            $table->foreign('counselor_id')
                ->references('id')
                ->on('counselors')
                ->onDelete('cascade');
            $table->timestamps();

            $table->primary(array('suggestion_id', 'counselor_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggestion_counselors');
    }
}
