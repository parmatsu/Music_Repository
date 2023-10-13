<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('music.posted')->with(['own_music_tracks' => $user->getOwnPaginateByLimit()]);
    }
}
