<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_id' => 1,
            'name' => 'Sohanur Rahman',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'S. Rahman',
            'username' => 'author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('author')
        ]);
    }
}
