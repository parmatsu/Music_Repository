<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Music Camp</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/music_list.css') }}">
    </head>
    <body>
        <header>
            <h1 id='top_title'>Music Camp</h1>
            <p id='top_phrase'>-音楽で心に灯火を-</p>
            <nav class=GB_item>
                <ul>
                    <li><a href="/bgm">BGM</a></li>
                    <li><a href="#">GBナビ</a></li>
                    <li><a href="#">GBナビ</a></li>
                    <li><a href="#">GBナビ</a></li>
                    <li><a href="#">icon</a></li>
                </ul>
            </nav>
            <div class=sub_menu>
                <ul>
                    <li><a href="#">検索</a></li>
                    <li><a href="/posted_tracks">投稿したトラック</a></li>
                    <li><a href="#">いいねしたトラック</a></li>
                    <li><a href="#">ダウンロード済みのトラック</a></li>
                </ul>
            </div>
        </header>
        <div class='container'>
        　<h1 class='contents'> {ユーザ} の投稿したトラック</h1>
        　<a href="/posting" class='posting'>新規投稿する</a>
        　<div class='play_posted_track'>
             @foreach($music as $track)
                @if(empty($track->music_file))
                 <p>Nothing on the track you posted.</p>
                @else
                   @if(!empty($track->music_pic))
                     <img src="{{ $track->music_pic }}" />
                   @else
                     <img src="https://res.cloudinary.com/drttytw1k/image/upload/v1692569835/lyjz51lny73vwaycodmd.png"/>
                   @endif
                 <h3>{{ $track->title}}</h3>
                @endif
             @endforeach
        　</div>
        　
        </div>
        
    </body>
</html>