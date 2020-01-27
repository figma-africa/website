<?php

use Illuminate\Database\Seeder;

class ambassadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ambs = \File::get(__dir__."/../data/ambs.json");
        $ambs = json_decode($ambs, true);
        DB::table('ambassadors')->truncate();
        DB::table('ambassadors')->insert($ambs);
    }
}
