<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_categories')->insert([
            'id_supplier' => 1,
            'id_category' => 1,
        ]);

        DB::table('supplier_categories')->insert([
            'id_supplier' => 2,
            'id_category' => 2,
        ]);
    }
}
