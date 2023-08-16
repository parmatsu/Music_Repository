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
            <p id='top_phrase'>-音楽で心に灯をともそう-</p>
            <nav class=GB_item>
                <ul>
                    <li><a href="#">BGM</a></li>
                    <li><a href="#">GBナビ</a></li>
                    <li><a href="#">GBナビ</a></li>
                    <li><a href="#">GBナビ</a></li>
                    <li><a href="#">icon</a></li>
                </ul>
            </nav>
            <div class=sub_menu>
                <ul>
                    <li><a href="#">検索</a></li>
                    <li><a href="#">投稿したトラック</a></li>
                    <li><a href="#">いいねしたトラック</a></li>
                    <li><a href="#">ダウンロード済みのトラック</a></li>
                </ul>
            </div>
        </header>
        <div class='container'>
        　<h1 class='contents'>BGM一覧</h1>
        　@foreach ($track as $music)
        　  <ul class='track_list'>
              　<li class='track' data-src='{{ asset("/storage/music_files/10%E2%84%83.mp3") }}'>{{ $music->title }}</li>
          　</ul>
          @endforeach
          <div class='overlay' id='overlay'>
              <audio controls id='overlay'>
                  <source id='audio_source' src='{{ asset("/storage/music_files/10%E2%84%83.mp3") }}' type=audio/mp3>
              </audio>
          </div>
        </div>
       <script src="JavaScript/music_overlay.js"></script>
    </body>
</html>