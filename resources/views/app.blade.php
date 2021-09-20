<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.formstyler.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.formstyler.theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.rateyo.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/media.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-inner">
                <nav class="menu">
                    <button class="menu__btn">
                        <div class="menu__btn-line"></div>
                        <div class="menu__btn-line"></div>
                        <div class="menu__btn-line"></div>
                    </button>
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                Магазины
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                Акции
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">
                                Доставка и оплата
                            </a>
                        </li>
                    </ul>
                </nav>
                <a class="logo" href="/">
                    <img class="logo__img" src="images/logo.png" alt="">
                    <img class="media__logo-img" src="images/media_logo.png" alt="">
                </a>
                <div class="header__box">
                    <p class="header__adress">
                        ул. Братьев Кашириных 129
                    </p>
                    <ul class="user-list">
                        <li class="user-list-item">
                            <a class="user-list__link" href="#">
                                <img src="images/heart.png" alt="">
                            </a>
                        </li>
                        <li class="user-list-item">
                            <a class="user-list__link" href="#">
                                <img src="images/user.png" alt="">
                            </a>
                        </li>
                        <li class="user-list-item">
                            <a class="user-list__link basket" href="{{ route('direct_basket') }}">
                                <img src="images/basket.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <ul class="menu-mobile__list">
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="images/user.png">
                <p>Войти</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="images/user.png">
                <p>Регистрация</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="images/heart.png">
                <p>Избранное</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="images/shop.png">
                <p>Магазины</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="images/percent.png">
                <p>Акции</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="images/car.png">
                <p>Доставка и оплата</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Мягкие игрушки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Интерактивные игрушки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Игрушки по размеру</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Персонажи мультфильмов</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Мягкие аксессуары</p>
            </a>
        </li>
    </ul>

    <div class="menu__mobile-linewrapper">
        <ul class="menu__mobile-line">
            <li class="menu__item">
                <a class="menu__link" href="#">
                    Магазины
                </a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">
                    Акции
                </a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">
                    Доставка и оплата
                </a>
            </li>
        </ul>
    </div>

    <div class="header__bottom">
        <div class="container">
            <ul class="menu-categories">
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="/catalog=3">Мягкие игрушки</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="/catalog=5">Интерактивные игрушки</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="/catalog=2">Игрушки по размеру</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="/catalog=4">Персонажи мультфильмов</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="/catalog=1">Мягкие аксессуары</a>
                </li>
            </ul>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top-inner">
                <div class="footer__top-item">
                    <h6 class="footer__top-title footer__top-newslatter">
                        Подпишитесь на нашу рассылку
                        и узнавайте о акциях быстрее
                    </h6>
                    <form class="footer-form" action="">
                        <input class="footer-form__input" type="text" placeholder="Введите ваш E-Mail:">
                        <button class="footer-form__btn" type="submit">Отправить</button>
                    </form>
                </div>
                <div class="footer__top-item footer__top-itemdrop">
                    <h6 class="footer__top-title footer__topdrop">
                        Информация
                    </h6>
                    <ul class="footer-list">
                        <li class="footer-list__item"><a href="#">
                                О компании
                            </a></li>
                        <li class="footer-list__item"><a href="#">
                                Контакты
                            </a></li>
                        <li class="footer-list__item"><a href="#">
                                Акции
                            </a></li>
                        <li class="footer-list__item"><a href="#">
                                Магазины
                            </a></li>
                    </ul>
                </div>
                <div class="footer__top-item">
                    <h6 class="footer__top-title footer__topdrop">
                        Интернет-магазин
                    </h6>
                    <ul class="footer-list">
                        <li class="footer-list__item"><a href="#">
                                Доставка и самовывоз
                            </a></li>
                        <li class="footer-list__item"><a href="#">
                                Оплата
                            </a></li>
                        <li class="footer-list__item"><a href="#">
                                Возврат-обмен
                            </a></li>
                        <li class="footer-list__item"><a href="#">
                                Новости
                            </a></li>
                    </ul>
                </div>
                <div class="footer__top-item footer__top-social">
                    <ul class="social-list">
                        <li class="social-list__item">
                            <a href="#">
                                <img src="images/instagram.png" alt="">
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#">
                                <img src="images/vkontakte.png" alt="">
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#">
                                <img src="images/facebook.png" alt="">
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="#">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <a class="footer__bottom-link" href="#">
                Договор оферты
            </a>
            <a class="footer__bottom-link" href="#">
                Политика обработки персональных данных
            </a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{URL::asset('js/slick.min.js')}}"></script>
<script src="{{URL::asset('js/ion.rangeSlider.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.formstyler.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.rateyo.min.min.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>

</body>

</html>
