<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => "Святой 2018 год",
            'image' => "1.jpeg",
            'date' => "2018-05-18",
            'venue' => "Москва",
            'price' => 2500,
            'capacity' => 550,
            'description' => "Концерт Альбатроса и празднование Холи 2018. Насладитесь живой музыкой и помойте аквариум после праздников.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('events')->insert([
            'name' => "Фестиваль еды",
            'image' => "2.jpg",
            'date' => "2018-04-18",
            'venue' => "Москва",
            'price' => 3500,
            'capacity' => 350,
            'description' => "Культурное представление с дегустацией продуктов питания.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('events')->insert([
            'name' => "Молодежный саммит Южной Азии",
            'image' => "3.jpg",
            'date' => "2018-04-20",
            'venue' => "Москва",
            'price' => 0,
            'capacity' => 250,
            'description' => "Обсуждение участия молодежи в охране культурного наследия.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('events')->insert([
            'name' => "Региональная конференция общества меньшинств",
            'image' => "4.jpg",
            'date' => "2018-04-15",
            'venue' => "Москва",
            'price' => 0,
            'capacity' => 100,
            'description' => "Лидеры общества меньшинств обсуждают свое участие в политике.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('events')->insert([
            'name' => "Ежегодный саммит Общества банкиров",
            'image' => "5.jpg",
            'date' => "2018-04-10",
            'venue' => "Москва",
            'price' => 5400,
            'capacity' => 60,
            'description' => "Выступления ветеранов отрасли об ограничениях Центрального банка на иностранные займы.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
