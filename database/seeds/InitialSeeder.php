<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => "Namnso Ukpanah",
                'email' => "namnsoukpanah@gmail.com",
                'password' => Hash::make("08033851494"),
            ]
        );
    }
}
