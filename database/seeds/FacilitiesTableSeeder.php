<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            'name' => "Air Conditioner",
            'icon' => "air_conditioner.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Ванна",
            'icon' => "bathtub.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Завтрак",
            'icon' => "breakfast.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Компьютер",
            'icon' => "computer.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "аптечка первой помощи",
            'icon' => "first_aid_kit.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Фен для волос",
            'icon' => "hair_dryer.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Мини-бар",
            'icon' => "mini_bar.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Мини-охладитель",
            'icon' => "mini_cooler.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Парковка",
            'icon' => "parking.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Телефон",
            'icon' => "telephone.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Телевидение",
            'icon' => "television.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('facilities')->insert([
            'name' => "Wifi",
            'icon' => "wifi.png",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
