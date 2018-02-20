<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('meta-title', 'Larademo')</title>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">

        <!-- include the BotDetect layout stylesheet -->
        @if (class_exists('CaptchaUrls'))
        <link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" rel="stylesheet">
        @endif
    </head>

    <body>
        @include('layouts/partials/navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </body>
</html>
