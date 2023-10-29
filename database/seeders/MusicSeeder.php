<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use DateTime;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('music')->insert([
            [
                'title' => '10℃',
                'composer' => 'しゃろう',
                'genre' => 'chill',
                'music_file' => 'https://res.cloudinary.com/drttytw1k/video/upload/v1693480773/zljxjsd4nykyxvmdd7my.mp3',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => '0',
    
            ],
            [
                'title' => 'Blessing',
                'composer' => 'halyosy',
                'genre' => 'J-POP',
                'music_file' => 'https://res.cloudinary.com/drttytw1k/video/upload/v1693480773/zljxjsd4nykyxvmdd7my.mp3',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => '0',
            ]
             ]);
    }
}
