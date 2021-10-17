<?php

use Illuminate\Database\Seeder;
use App\RegModel;

class RegTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        $faker = \Faker\Factory::create();
         $password = Hash::make('toptal');

        for ($i = 0; $i < 10; $i++) {
            RegModel::create([
                'username'     => $faker->username,
                'password' => $password,
                'fullname' => $faker->name,
                'phone' => $faker->randomNumber,
            ]);
        }
    }
}
