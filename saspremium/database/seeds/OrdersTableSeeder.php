<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'num_order' => 2423082,
            'id_product' => 1,
            'id_user' => 1,
            'id_delivery_address' => 3
        ]);

        DB::table('orders')->insert([
            'num_order' => 2023082,
            'id_product' => 2,
            'id_user' => 1,
            'id_delivery_address' => 3
        ]);

        DB::table('orders')->insert([
            'num_order' => 505594,
            'id_product' => 1,
            'id_user' => 1,
            'id_delivery_address' => 2
        ]);

        DB::table('orders')->insert([
            'num_order' => 505594,
            'id_product' => 2,
            'id_user' => 1,
            'id_delivery_address' => 2
        ]);
    }
}
