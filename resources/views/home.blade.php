<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My web site | Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Ciao {{ $user_name }} {{ $user_surname }}
                </div>

                <div class="links">
                    <a href="{{ route("aboutUs") }}">About us</a>
                    <a href="{{ route("news") }}">News</a>
                    <a href="{{ route("blog") }}">Blog</a>
                    <a href="{{ url("https://github.com/") }}">GitHub</a>
                </div>

            </div>
        </div>
    </body>
</html>
