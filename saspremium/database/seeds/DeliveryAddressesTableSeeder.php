<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_addresses')->insert([
            'address' => '4 place du Val',
            'postcode' => '45100',
            'city' => "Orléans",
            'country' => "France",
            'id_user' => 1,
            'id_supplier' => null
        ]);

        DB::table('delivery_addresses')->insert([
            'address' => '351 Gursu mahallesi',
            'postcode' => '202',
            'city' => "Antalya",
            'country' => "Turquie",
            'id_user' => 1,
            'id_supplier' => null
        ]);

        DB::table('delivery_addresses')->insert([
            'address' => '2 allée Christine de Pisan',
            'postcode' => '45100',
            'city' => "Paris",
            'country' => "France",
            'id_user' => null,
            'id_supplier' => 1
        ]);

        DB::table('delivery_addresses')->insert([
            'address' => '563 Taksim Meydani',
            'postcode' => '202',
            'city' => "Istanbul",
            'country' => "Turquie",
            'id_user' => null,
            'id_supplier' => 1
        ]);
    }
}
