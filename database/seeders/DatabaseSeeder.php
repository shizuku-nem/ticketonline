<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        // $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $un = "u".$i;
            if ($i == 0) {
                $role = "Admin";
            }
            else if ($i == 1 || $i == 2) {
                $role = "Customer";
            }
            else {
                $role = "Car Owner";
            }
            DB::table('users')->insert([
                'username' => $un,
                'password' => Hash::make('1'),
                'role' => $role,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
            
        }
        for ($i = 0; $i < 5; $i++) {
            $license_plate = "29H-0000".$i;
            DB::table('cars')->insert([
                'name' => ($i < 2) ? "Nhà xe mất phương hướng" : "Nhà xe Phương Trinh",
                'license_plate' => $license_plate,
                'url_photo' => "https://source.unsplash.com/random",
                'description' => "Xe đẹp, phòng chống covid, có khử khuẩn, tặng đồ ăn cho khách",
                'user_id' => rand(1, 4),
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        }
        $provinces = ["Hà Nội", "Bắc Giang", "Quảng Ninh", "Hải Phòng", "Đà Nẵng"];
        for ($i = 0; $i < 5; $i++) {
            DB::table('provinces')->insert([
                'name' => $provinces[$i],
                "gso_id" => $i,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        }
        for ($i = 0; $i < 20; $i++) {
            DB::table('trips')->insert([
                'car_id' => rand(1, 4),
                'start_time' => ($i < 10) ? date("Y-m-d H:i:s") : new \DateTime("2021-05-10 10:24:19"),
                'end_time' => ($i < 10) ? new \DateTime("2021-05-10 10:24:19") : new \DateTime("2021-05-11 10:24:19"),
                'start_point_id' => rand(1, 2),
                'end_point_id' => rand(3, 4),
                'price' => ($i < 10) ? 100000 : 200000,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
