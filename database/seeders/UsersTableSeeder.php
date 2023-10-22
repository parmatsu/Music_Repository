<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //ユーザデータを挿入
        DB::table('users')->insert([
            'id' => '2',
            'name' => 'test1',
            'email' => 'mplattest703@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('rsB4FmS2'),
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            ]);
    }
}
