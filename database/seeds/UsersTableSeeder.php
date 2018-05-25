<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create fake Users
        DB::table('users')->insert([
            'name' => 'bruno',
            'email' => 'delattreb@gmail.com',
            'password' => bcrypt('0000')
        ]);
        DB::table('users')->insert([
            'name' => 'celine',
            'email' => 'celdelattre@gmail.com',
            'password' => bcrypt('0000')
        ]);
    }
}
