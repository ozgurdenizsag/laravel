<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Casque Beats by DRE',
            'desc' => 'Meilleur casque au monde actuellement.',
            'img' => '',
            'price' => 299.99,
            'quantity' => 5,
            'delivery_date' => Carbon::parse('2020-03-27'),
            'delivery_price' => 4.99,
            'id_supplier' => 1,
            'id_category' => 1
        ]);
        
        DB::table('products')->insert([
            'name' => 'Red Dead Redemption 2 - Plateforme PC',
            'desc' => 'Il y a pas mieux en terme de jeux en open-world',
            'img' => '',
            'price' => 39.99,
            'quantity' => 10,
            'delivery_date' => Carbon::parse('2020-03-24'),
            'delivery_price' => 0.99,
            'id_supplier' => 2,
            'id_category' => 2
        ]);
    }
}
