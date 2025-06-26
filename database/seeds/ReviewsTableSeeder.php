<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'review' => "У меня самые лучшие впечатления от просмотра этой комнаты.",
            'rating' => 5,
            'approval_status' => "approved",
            'room_booking_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reviews')->insert([
            'review' => "Мне нравится обстановка в отеле.",
            'rating' => 3,
            'approval_status' => "pending",
            'room_booking_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reviews')->insert([
            'review' => "Моим детям понравился вид и просторные игровые площадки в отеле.",
            'rating' => 4,
            'approval_status' => "approved",
            'room_booking_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reviews')->insert([
            'review' => "Это мой второй приезд, и отель мне нравится.",
            'rating' => 4,
            'approval_status' => "approved",
            'room_booking_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reviews')->insert([
            'review' => "Я бы никогда не вернулся в этот отель.",
            'rating' => 1,
            'approval_status' => "rejected",
            'room_booking_id' => 6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
