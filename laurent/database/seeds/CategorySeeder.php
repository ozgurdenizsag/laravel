<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Cuisine',
            'desc' => 'Montius nos tumore inusitato quodam et novo ut rebellis et maiestati',
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Salle de bain',
            'desc' => 'Montius nos tumore inusitato quodam et novo ut rebellis et maiestati',
        ]);

        DB::table('categories')->insert([
            'name' => 'Rénovation Exterieur',
            'desc' => 'Montius nos tumore inusitato quodam et novo ut rebellis et maiestati',
        ]);
    }
}
