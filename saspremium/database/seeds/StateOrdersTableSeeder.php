<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state_orders')->insert([
            'processed' => 1,
            'shipped' => 0,
            'delivered' => 0,
            'id_num_order' => 2423082
        ]);

        DB::table('state_orders')->insert([
            'processed' => 0,
            'shipped' => 0,
            'delivered' => 0,
            'id_num_order' => 505594
        ]);

    }
}
