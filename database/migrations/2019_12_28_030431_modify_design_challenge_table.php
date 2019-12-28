<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDesignChallengeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('design_challenges', function (Blueprint $table) {
            $table->string('challenge_image_link')
                ->default('/images/design-challenge.jpg');
                $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('design_challenges', function (Blueprint $table) {
            $table->dropColumn('challenge_image_link');
        });
    }
}
