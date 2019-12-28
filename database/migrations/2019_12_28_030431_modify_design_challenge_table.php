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
                $table->longText('description')->default(
                    "Our design 
                    challenge is held on a weekly basis and it is designed to enable 
                    people 
                    explore design concepts in a manner which pushes our creativity, 
                    challenges our exposure while offering competition in a 
                    positive approach.
                    Submissions are voted and the winning entry gets a prize as well 
                    as promotion on all of our platforms."
                );
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
