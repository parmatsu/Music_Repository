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
        
        @include('music.shared_content.shared_content')
        
        <div class='container'>
        　<h1 class='contents'>人気のあるトラック</h1>
        　@foreach ($music as $track)
           <div>
             <p>{{ $track->title }}</p>
             <audio controls>
                 <source src="{{ asset($track->music_file) }}" type="audio/mp3">
             </audio>
           </div>
          @endforeach
        </div>
       <script src="JavaScript/music_overlay.js"></script>
    </body>
</html>