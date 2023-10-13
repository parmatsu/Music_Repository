<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Http\Requests\MusicRequest;
use Cloudinary;

class MusicController extends Controller
{
    public function index(Music $music)
    {
        return view('music.index')->with(['music' => $music->get()]);
    }
    public function bgm(Music $music)
    {
        return view('music.bgm')->with(['music' => $music->get()]);
    }
    public function posted(Music $music)
    {
        return view('music.posted')->with(['music'=>$music->get()]);
    }
    public function posting()
    {
        return view('music.posting');
    }
    
    /*form送信処理
    データそのものはCloudinaryへ、パスはDBへ保存*/
    public function upload(MusicRequest $request, Music $music)
    {
        $input = $request['music'];
        $input += ['user_id' => $request->user()->id];
        if($request->file('music_file')) {
            $musicPath = Cloudinary::uploadFile($request->file('music_file')->getRealPath())->getSecurePath();
            $input += ['music_file' => $musicPath];
        }
        
        if($request->file('music_pic')) {
            $picturePath = Cloudinary::upload($request->file('music_pic')->getRealPath())->getSecurePath();
            $input += ['music_pic' => $picturePath];
            
        }
        
        $music->fill($input)->save();
        
        return redirect('/posted_tracks');
    }
}
