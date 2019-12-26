<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengeEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('name of person that submitted');
            $table->string('email');
            $table->bigInteger('design_challenge_id')
                ->references('id')
                ->on('design_challenges')
                ->unsigned();
            $table->longText('link');
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
        Schema::dropIfExists('challenge_entries');
    }
}
