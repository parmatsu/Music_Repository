<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index(Music $music)
    {
        $tracks = Music::all();
        return view('music.index')->with(['tracks' => $tracks]);
    }
}
