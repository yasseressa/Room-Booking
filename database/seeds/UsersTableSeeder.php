<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();
        DB::table('users')->insert([
            'first_name' => "А",
            'last_name' => "А",
            'gender' => "М",
            'phone' => "09103456721",
            'address' => "Москва",
            'email' => "А@gmail.com",
            'password' => bcrypt('123456'),
            'avatar' => 'girl-1.png',
            'about' => "привет из другого мира",
            'status' => TRUE,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'first_name' => "Yasser",
            'last_name' => "Essa",
            'gender' => "М",
            'phone' => "+79998642090",
            'address' => "Москва",
            'email' => "yasser@gmail.com",
            'password' => bcrypt('y@sser'),
            'avatar' => 'boy-1.png',
            'about' => "yasser",
            'role' => 'admin',
            'status' => TRUE,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        factory(App\Model\User::class, 10)->create();
    }
}
