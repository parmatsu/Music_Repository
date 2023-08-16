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
        $musicFilePath = public_path('music_path/10℃.mp3');
        $encodedFileName = urlencode(basename($musicFilePath));

        $storagePath = 'public/music_files/' . $encodedFileName;
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
