<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self' https: data:;
        img-src 'self' https: http: data:;
        font-src 'self' https: data:;
        style-src 'self' https: 'unsafe-inline';
        script-src 'self' https: 'unsafe-inline' 'unsafe-eval';
    ">

    <title>@yield('title', 'Biztos Alkuszom')</title>

    <!-- App css -->
    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="antialiased">
    <header class="header">
        <div class="header-content d-flex">
            <div class="logo-box  header-content__logo-box">
                <a href="/" class="header-content__logo-box__link">
                    <img class="header-content__logo-box__link__img" src="/img/header/logo.svg" alt="Biztos Alkuszom">
                </a>
            </div>
            <div class="nav-box header-content__nav-box">
                <div class="hamburger position-relative" id="hamburger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <nav class="menu">
                    <ul class="menu__list d-flex" id="menu__list">
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Főoldal</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Partnerek</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Szolgáltatások</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Szolgáltatások</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Ajánlatkérés</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item" href="#">Kapcsolat</a>
                        </li>
                        <li class="menu__list__li menu__list__li-facebook-link">
                            <a class="menu__item" href="#">
                                <img class="menu__list__li-facebook-link__img" src="/img/header/facebook.svg"
                                    alt="Biztos Alkuszom">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <script src="/js/app.js"></script>
    </footer>
</body>

</html>