<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'username' => ("user"+$i),
                'password' => bcrypt('123456')
            ]);
        }
    }
}
