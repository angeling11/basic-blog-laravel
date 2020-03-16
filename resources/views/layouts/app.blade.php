<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - {{ config('app.name', 'BlogTest') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="title my-3 text-center">
            BlogTest
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="{{ route('index') }}">BlogTest</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBar">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ route('index') }}">Home</a>
                    <a class="nav-item nav-link" href="{{ route('new_post') }}">Create Post</a>
                    <a class="nav-item nav-link disabled" href="#">About</a>
                </div>
            </div>
        </nav>
        
        <main class="my-5">
            @yield('content')
        </main>
    </body>
</html>
