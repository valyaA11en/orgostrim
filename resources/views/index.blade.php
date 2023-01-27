<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link rel="stylesheet" href="/resources/css/bootstrap-grid.css">--}}
    <link rel="stylesheet" href="/resources/css/boostp/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Оргостим</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__wrapper container">
            <div class="header__logo__block">
                <img class="header__logo" src="/resources/src/images/logo1.svg" alt="logo">
                <div class="header__language">
                    <img src="/resources/src/images/russia-svgrepo-com.svg" alt="Ru">
                    <a class="header__language__text" href="">Ru</a>
                </div>
            </div>
            <div class="header__menu__block">
                <ul class="header__menu">
                    <a href="#">
                        <li class="header__menu__links">Продукция</li>
                    </a>
                    <a href="#">
                        <li class="header__menu__links">Партнерам</li>
                    </a>
                    <a href="#">
                        <li class="header__menu__links">Документация</li>
                    </a>
                    <a href="#">
                        <li class="header__menu__links">Контакты</li>
                    </a>
                </ul>
            </div>
            <div class="header__block__right">
                <div class="header__phone__number">
                    <p class="phone__number__text">+7 (912) 777-54-45</p>
                    <div class="phone__number__btn__block">
                        <a class="phone__number__btn" href="">Заказать звонок</a>
                    </div>
                </div>
            </div>
            <div class="header__request">
                <a class="header__request__btn" href="#">Оставить заявку</a>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="intro">
            <div class="main__intro">
                <video class="intro__video" src="/resources/src/video/video.mov" autoplay muted loop></video>
            </div>
            <div class="intro__content">
                <div class="container">
                    <h1 class="intro__title">ОргоСтим</h1>
                    <h3 class="intro__text">Богатый урожай - наша забота</h3>
                    <p class="intro__description">Продукт для органического земледелия</p>
                    <div class="intro__btn__block">
                        <a class="intro__btn" href="#">Получить консультацию</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="products">
                <div class="products__title">
                    <p class="title">Наша продукция</p>
                </div>
                <div class="products__card">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="products__card__img">
                                <img src="/resources/src/images/product1.svg" alt="product1" class="card__img">
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="products__card__text ">
                                <div class="card__wrapper">
                                    <p class="card__title">ОргоСТим-Старт</p>
                                    <p class="card__text">Органический стимулятор роста из микро и макроэлементов,
                                        гуминовых,
                                        фульвовых и аминокислот для обработки семян, ростков и саженцев перед посадкой.
                                        Состав
                                        на старте гарантированно обеспечит Ваши посевы, рассаду и саженцы
                                        сбалансированным
                                        питанием и позволит получить:
                                    </p>
                                    <ul class="card__benefits">
                                        <li class="card__links">Мощные всходы</li>
                                        <li class="card__links">Быстрое развитие корневой системы</li>
                                        <li class="card__links">Повышение иммунитета к грибковым заболеваниям</li>
                                        <li class="card__links">Движения прорастания</li>
                                    </ul>
                                </div>
                                <div class="card__btn__block">
                                    <a class="card__btn" href="#">Узнать цену</a>
                                </div>
                                <img class="card__grass" src="/resources/src/images/grass.svg" alt="grass">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="composition__block">
                <a class="composition__btn" href="#">Показать состав</a>
                <div class="composition__wrapper">
                    <div class="composition__btn__content">
                        <div class="composition__title__group">
                            <p class="composition__title">Наименование элемента</p>
                            <p class="composition__title">Содержание мг/кг (сух.вещества)</p>
                        </div>
                        <div class="composition__text__group">
                            <div class="composition__text__div">
                                <p class="composition__text">Аминоуксусная кислота</p>
                            </div>
                            <div class="composition__text__div">
                                <p class="composition__text">Азот</p>
                            </div>
                        </div>

                    </div>
                    <div class="composition__video">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">3</footer>
</div>
<script src="resources/js/jquery/jquery-3.6.0.min.js"></script>
<script src="resources/js/slick/slick.min.js"></script>
<script src="resources/js/app.js"></script>
</body>
</html>
