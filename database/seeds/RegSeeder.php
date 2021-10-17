<?php

use Illuminate\Database\Seeder;

class RegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        register::truncate();

        $faker = \Faker\Factory::create();
         $password = Hash::make('toptal');

        for ($i = 0; $i < 10; $i++) {
            register::create([
                'name'     => $faker->name,
                'password' => $password,
                'fullname' => $faker->fullname,
                'phone' => $faker->phone,
            ]);
        }
    }
}
