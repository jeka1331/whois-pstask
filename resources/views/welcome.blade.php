<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Whois</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,100&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


        <style>

            body {
                font-family: 'Montserrat', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
{{--                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">--}}
{{--                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>--}}
{{--                </a>--}}

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="whois" class="nav-link px-2 text-secondary">Whois</a></li>

                </ul>


                @auth

                    <div class="text-end">

                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>


                        @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="btn btn-warning">Sign-up</a>
                        @endif
                    </div>

                @endauth
            </div>
        </div>
    </header>
    <main>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">WHOIS сервис</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Проверьте, свободно ли доменное имя или узнайте, кому принадлежит интересующий вас домен.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                </div>
            </div>
        </div>
    </main>

    </body>
</html>
