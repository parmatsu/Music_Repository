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
        　 <h1 class='contents'> 新たに音楽を投稿する</h1>
        　 <div class='form'>
        　   <form action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="title">
                    <p>タイトル</p>
                    <input type="text" name="music[title]" placeholder="タイトル" value="{{ old('music.title') }}"/>
                    <p class="title_error" style="color:red">{{ $errors->first('music.title') }}</p>
                </div>
                <div class="composer">
                    <p>作者</p>
                    <input type="text" name="music[composer]" placeholder="ユーザ名" value="{{ old('music.composer') }}"/>
                    <p class="composer_error" style="color:red">{{ $errors->first('music.composer') }}</p>
                </div>
                <div>
                    <p>ジャンル</p>
                    <textarea name="music[genre]" placeholder="ロック、EDM、クラシック、ジャズ etc..." value="{{ old('music.genre') }}"></textarea>
                    <p class="genre_error" style="color:red">{{ $errors->first('music.genre') }}</p>
                </div>
                <div class="music_file">
                    <p>音楽ファイル</p>
                    <input type="file" name="music_file">
                    <p class="music_file_error" style="color:red">{{ $errors->first('music_file') }}</p>
                </div>
                <div class="music_pic">
                    <p>画像ファイル</p>
                    <input type="file" name="music_pic">
                    <p class="music_pic_error" style="color:red">{{ $errors->first('music_pic') }}</p>
                </div>
                 <input type="submit" class="submitbtn" value="投稿する"/>
             </form>
           </div>
        　
        </div>
        
    </body>
</html>