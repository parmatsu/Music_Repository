<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicRequest extends FormRequest
{
    
   
    public function rules()
    {
        return [
            'music.title' => 'required|string|max:30',
            'music.composer' =>'required|string|max:15',
            'music.genre' => 'required|string|max:10',
            'music_file' => 'required|max:10240',
            'music_pic' => 'nullable|image|max:5120'
        ];
    }
}
