<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'name' => "Шипящий гамбас",
            'type' => 'Закуска',
            'image' => "sizzling_gambas.jpeg",
            'price' => 630,
            'description' => "Шипящий гамбас готовится из сочетания креветок и овощей.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Кальмары",
            'type' => 'Закуска',
            'image' => "calamares.jpg",
            'price' => 630,
            'description' => "Кальмары - это филиппинская версия средиземноморского блюда из жареных кальмаров в панировке, кальмари.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Куриный суп Сотангхон",
            'type' => 'Суп',
            'image' => "chicken_sotanghon_soup.jpg",
            'price' => 410,
            'description' => "Куриный суп Сотангхон - это суп, приготовленный из курицы небольшого размера, целлофановой лапши и овощей.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Смешанный зеленый салат",
            'type' => 'Салат',
            'image' => "mixed_green_salad.jpg",
            'price' => 370,
            'description' => "Легкий винегрет, которым заправляется этот освежающий салат, заправляется чесноком и измельченными хлопьями красного перца.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Салат от шеф-повара",
            'type' => 'Салат',
            'image' => "chef_salad.jpg",
            'price' => 400,
            'description' => "Салат от шеф-повара - это американский салат, состоящий из яиц, мяса, курицы, помидоров, огурцов и сыра.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Бифштекс по-тагальски",
            'type' => 'основное блюдо',
            'image' => "beefsteak_tagalog.jpg",
            'price' => 650,
            'description' => "Бифштекс по-тагальски - это блюдо из кусочков соленой и перченой вырезки.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Кордон Блю",
            'type' => 'основное блюдо',
            'image' => "cordon_bleu.jpg",
            'price' => 630,
            'description' => "Кордон блю - это блюдо из мяса, обернутого вокруг сыра, затем запанированного и обжаренного на сковороде или во фритюре.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Адобо из курицы и свинины",
            'type' => 'основное блюдо',
            'image' => "chicken_pork_adobo.jpg",
            'price' => 630,
            'description' => "Адобо с курицей и свининой - это разновидность классического филиппинского рагу, в котором сочетаются кусочки курицы и кубики свинины.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Кальмар на гриле",
            'type' => 'основное блюдо',
            'image' => "grilled_squid.jpg",
            'price' => 550,
            'description' => "В простом рецепте приготовления кальмаров на гриле используется фантастический маринад с тмином, придающий блюду ближневосточный колорит.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Блюдо из свежих фруктов",
            'type' => 'Десерт',
            'image' => "fresh_fruit_platter.jpg",
            'price' => 300,
            'description' => "Это основа из спелых, разноцветных, нарезанных ломтиками дынь и ананасов.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Банановый сплит",
            'type' => 'Десерт',
            'image' => "banana_split.jpg",
            'price' => 360,
            'description' => "Банановый сплит - это десерт на основе мороженого.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('foods')->insert([
            'name' => "Шоколадно-ванильный пломбир",
            'type' => 'Десерт',
            'image' => "chocolate_vanilla_sundae.jpeg",
            'price' => 200,
            'description' => "Это сытное мороженое с начинкой из брауни, ванильного мороженого, шоколадного сиропа и взбитых сливок.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    }
}

