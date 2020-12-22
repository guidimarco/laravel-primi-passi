<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My web site | News</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    News
                </div>

                <div class="content">
                    <div class="news-card">
                        @foreach ($all_news as $news)
                            <h2>{{ $news["title"] }}</h2>
                            <p>{{ $news["article"] }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
