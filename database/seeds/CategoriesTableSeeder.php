<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Фотосъемка', 'created_at' => now(), 'cover' => '/covers/photo.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Видеосъемка', 'created_at' => now(), 'cover' => '/covers/video.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Ведущие', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Организация свадьбы', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Оформление и украшение', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Банкетные залы', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Музыка и артисты', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Свадебные торты', 'created_at' => now(), 'cover' => '/covers/cakes.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Автомобили', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Свадебные платья', 'created_at' => now(), 'cover' => '/covers/dresses.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Стилисты', 'created_at' => now(), 'cover' => '/covers/stylists.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Обручальные кольца', 'created_at' => now(), 'cover' => '/covers/rings.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Мужские костюмы', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Свадебные букеты', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Аксессуары', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Фейерверки', 'created_at' => now(), 'cover' => '/covers/fireworks.svg', 'icon' => '/covers/fireworks_icon.svg'],
            ['name' => 'Места для фотосессий', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
            ['name' => 'Другое', 'created_at' => now(), 'cover' => '/covers/no_cover.svg', 'icon' => '/covers/tabicon.svg'],
        ]);
    }
}
