<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert([
            'name' => "1.jpg",
            'small_title' => "Одно впечатление от отеля",
            'big_title' => "Один из МГТУ",
            'description' => "Текст",
            'link' => 'room_type/1',
            'link_text' => 'Закажите прямо сейчас',
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('slider')->insert([
            'name' => "2.jpg",
            'small_title' => "Два впечатления от отеля",
            'big_title' => "Два из МГТУ",
            'description' => "Текст",
            'link' => 'room_type/2',
            'link_text' => 'Закажите прямо сейчас',
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('slider')->insert([
            'name' => "3.jpg",
            'small_title' => "Три впечатления от отеля",
            'big_title' => "Три из МГТУ",
            'description' => "Текст",
            'link' => 'room_type/3',
            'link_text' => 'Закажите прямо сейчас',
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('slider')->insert([
            'name' => "4.jpg",
            'small_title' => "Четыре впечатления от отеля",
            'big_title' => "Четыре из МГТУ",
            'description' => "Текст",
            'link' => 'room_type/4',
            'link_text' => 'Закажите прямо сейчас',
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
