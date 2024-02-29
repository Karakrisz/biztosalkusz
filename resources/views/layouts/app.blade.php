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

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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
                            <a class="menu__item menu__item--border-left text-color text-transform-uppercase"
                                href="#">Főoldal</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item text-color text-transform-uppercase" href="#">Partnerek</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item text-color text-transform-uppercase" href="#">Szolgáltatások</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item text-color text-transform-uppercase" href="#">Szolgáltatások</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item text-color text-transform-uppercase" href="#">Ajánlatkérés</a>
                        </li>
                        <li class="menu__list__li">
                            <a class="menu__item text-color text-transform-uppercase" href="#">Kapcsolat</a>
                        </li>
                        <li class="menu__list__li menu__list__li-facebook-link">
                            <a class="menu__item text-color text-transform-uppercase" href="#">
                                <img class="menu__list__li-facebook-link__img" src="/img/header/facebook.svg"
                                    alt="Biztos Alkuszom">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-bottom d-flex">
            <div class="header-bottom__div">
                <h1 class="header-bottom__div__h1 text-color-w text-transform-uppercase">ÁGOSTON GÁBOR - <span
                        class="header-bottom__div__span">Az Ön
                        alkusza</span>
                </h1>
            </div>
            <div class="header-bottom__div header-bottom__div-linkbox">
                <a class="header-bottom__div-linkbox__link text-color-w" href="tel:+36302345866">
                    <img class="header-bottom__div-linkbox__link__img position-relative" src="/img/header/mobile.svg"
                        alt="Biztos Alkuszom">06 30 234 5866
                </a>
                <a class="header-bottom__div-linkbox__link text-color-w" href="mailto:biztos@alkuszom.info">
                    <img class="header-bottom__div-linkbox__link__img header-bottom__div-linkbox__link__img--margin-left position-relative"
                        src="/img/header/mail.svg" alt="Biztos Alkuszom">biztos@alkuszom.info
                </a>
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