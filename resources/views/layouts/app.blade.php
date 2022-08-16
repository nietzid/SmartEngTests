<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <style>
        .flex {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3 sticky-top" style=" background-color: #3E6D81 !important; box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.35);">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php">
                    <img src="/assets/img/logo-light.png" width="60%" alt="Home">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-weight: 600;">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white !important;" aria-current="page" href="<?= url(''); ?>">Home&emsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white !important;" aria-current="page" href="<?= url('question-collection'); ?>">Question Collection&emsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white !important;" aria-current="page" href="<?= url('generate'); ?>">Generate&emsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white !important;" aria-current="page" href="<?= url('cbt'); ?>">CBT&emsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white !important;" aria-current="page" href="<?= url('login'); ?>">Sign In&emsp;</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class='dropdown-item' href='/'>
                                Masuk
                            </a>
                            <a class='dropdown-item' href='/'>
                                Profile
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
</body>

</html>