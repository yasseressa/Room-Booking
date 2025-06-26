<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => "1.jpg",
            'caption' => "Светлая комната",
            'is_primary' => true,
            'status' => true,
            'room_type_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "2.jpg",
            'caption' => "Вид из окна",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "3.jpg",
            'caption' => "Купание в сумерках",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "4.jpg",
            'caption' => "Прекрасная зима",
            'is_primary' => true,
            'status' => true,
            'room_type_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "5.jpg",
            'caption' => "Минимальный",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "6.jpg",
            'caption' => "Абстрактный",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "7.jpg",
            'caption' => "Новая концепция",
            'is_primary' => true,
            'status' => true,
            'room_type_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "8.jpg",
            'caption' => "Новая концепция",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "9.jpg",
            'caption' => "Лучшая концепция",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "10.jpg",
            'caption' => "Новая вещь",
            'is_primary' => true,
            'status' => true,
            'room_type_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "11.jpg",
            'caption' => "Комната с прохладными аспектами",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "12.jpg",
            'caption' => "Удивительная комната",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "13.jpg",
            'caption' => "Комната с кондиционером",
            'is_primary' => true,
            'status' => true,
            'room_type_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "14.jpg",
            'caption' => "Уютная комната",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "15.jpg",
            'caption' => "Искусная комната",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "16.jpg",
            'caption' => "Комната скульптур",
            'is_primary' => true,
            'status' => true,
            'room_type_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "17.jpg",
            'caption' => "Ванная комната",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "18.jpg",
            'caption' => "холодильная комната",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "19.jpg",
            'caption' => "Что нового",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "20.jpg",
            'caption' => "Летний бриз",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "21.jpg",
            'caption' => "Осенний ветерок",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "22.jpg",
            'caption' => "Новый бриз",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "23.jpg",
            'caption' => "Полный бриз",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('images')->insert([
            'name' => "24.jpg",
            'caption' => "Потому что легкий ветерок",
            'is_primary' => false,
            'status' => true,
            'room_type_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
