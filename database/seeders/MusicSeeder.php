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
        $musicFilePath 
                = '/home/ec2-user/environment/platform/resources/music/10℃.mp3';
                
        $storagePath = 'music_files/' . basename($musicFilePath);
        Storage::put($storagePath, file_get_contents($musicFilePath));
        
        DB::table('music')->insert([
                'title' => '10℃',
                'composer' => 'しゃろう',
                'genre' => 'chill',
                'music_file' => $storagePath,
                'upload_date' => now(),
                
             ]);
    }
}
