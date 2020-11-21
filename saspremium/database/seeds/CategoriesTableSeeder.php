<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => "High-Tech",
            'desc' => "Retrouvez tous les produits de la catégorie High-Tech",
        ]);

        DB::table('categories')->insert([
            'name' => "Jeux-Vidéos",
            'desc' => "Retrouvez les dernières nouveautés en terms de jeux vidéos",
        ]);
    }
}
