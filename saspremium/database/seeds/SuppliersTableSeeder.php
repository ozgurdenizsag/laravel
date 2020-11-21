<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => "Ozgur",
            'desc' => "desc 1",
            'tel' => "123123"
        ]);

        DB::table('suppliers')->insert([
            'name' => "Ayoub",
            'desc' => "desc 2",
            'tel' => "456456"
        ]);
    }
}
