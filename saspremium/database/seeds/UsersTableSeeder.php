<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => "ozgur",
            'lastname' => "ozgur abi",
            'email' => 'ozgur@gmail.com',
            'password' => Hash::make('ozgur'),
            'type' => 'user'
        ]);

        DB::table('users')->insert([
            'firstname' => "ayoub",
            'lastname' => "ayoubinoub",
            'email' => 'ayoub@gmail.com',
            'password' => Hash::make('ozgur'),
            'type' => 'admin'
        ]);
    }
}
