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
        　<h1 class='contents'> {{ Auth::user()->name }} の投稿したトラック</h1>
        　<a href="/posting" class='posting'>新規投稿する</a>
        　<div class='play_posted_track'>
             @foreach($own_music_tracks as $track)
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
                
                @if(!empty($track->user->name))
                <p>{{ $track->user->name }}</p>
                @endif
             @endforeach
        　</div>
        　<div class='paginate'>
            {{ $own_music_tracks->links() }}
        　</div>
        </div>
        
    </body>
</html>