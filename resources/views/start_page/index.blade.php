@extends('app')

@section('content')
    <section class="banner-sction page-section">
        <div class="container">
            <div class="banner-section__inner">
                <div class="banner-section__slider">
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="images/banner-slider.png" alt="">
                    </a>
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="images/banner-slider-2.png" alt="">
                    </a>
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="images/banner-slider.png" alt="">
                    </a>
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="images/banner-slider.png" alt="">
                    </a>
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="images/banner-slider.png" alt="">
                    </a>
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="images/banner-slider.png" alt="">
                    </a>
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="images/banner-slider.png" alt="">
                    </a>
                </div>
                <a class="banner-section__item sale-item" href="#">
                    <div class="sale-item__top">
                        <p class="sale-item__info">Акция</p>
                        <div class="sale-item__price">
                            <div class="price sale-item__price-new">{{ $currentSaleProduct->price }}</div>
                            <div class="price sale-item__price-old">{{ $currentSaleProduct->price + ($currentSaleProduct->price * 0.2) }}</div>
                        </div>
                    </div>
                    <img class="sale-item__img" src="{{ $currentSaleProduct->image }}" alt="">
                    <h5 class="sale-item__title">
                        {{ $currentSaleProduct->title }}
                    </h5>
                    <div class="sale-item__footer">
                        Акция действует до
                        <span>01.06.2021</span>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <div class="search page-section">
        <div class="container">
            <div class="search__inner">
                <div class="search__tabs tabs-wrapper">
                    <div class="mobile-overflow">
                        <a class="tab search__tabs-item tab--active" href="#tab-1">Поиск по артикулу</a>
                        <a class="tab search__tabs-item" href="#tab-2">Поиск по марке</a>
                        <a class="tab search__tabs-item" href="#tab-3">Поиск по названию товара</a>
                    </div>
                </div>
                <div class="search__content">
                    <div id="tab-1" class="tabs-content search__content-item tabs-content--active">
                        <form class="search__content-form">
                            <input class="search__content-input" type="text" placeholder="Введите артикул">
                            <button class="search__content-btn" type="submit">Искать</button>
                        </form>
                    </div>
                    <div id="tab-2" class="tabs-content search__content-item">
                        <form class="search__content-form">
                            <input class="search__content-input" type="text" placeholder="Введите марку">
                            <button class="search__content-btn" type="submit">Искать</button>
                        </form>
                    </div>
                    <div id="tab-3" class="tabs-content search__content-item">
                        <form class="search__content-form">
                            <input class="search__content-input" type="text" placeholder="Введите название товара">
                            <button class="search__content-btn" type="submit">Искать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="categories page-section">
        <div class="container">
            <div class="categories__inner">
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Lori Colori</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="images/categories-1.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Fancy</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="images/categories-2.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">ABtoys</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="images/categories-3.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Maxitoys</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="images/categories-4.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Зайки Ми</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="images/categories-5.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Tinni Toys</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="images/categories-6.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="products">
        <div class="container">
            <div class="products__inner">
                <h3 class="products__title">
                    Популярные товары
                </h3>
                <div class="tabs-wrapper">
                    <div class="tabs products__tabs mobile-overflow">
                        <a class="tab products__tab tab--active" href="#product-tab-1">мягкие игрушки</a>
                        <a class="tab products__tab" href="#product-tab-2">интерактивные игрушки</a>
                        <a class="tab products__tab" href="#product-tab-3">персонажи мультфильмов</a>
                        <a class="tab products__tab" href="#product-tab-4">мягкие аксессуары</a>
                    </div>
                </div>
                <div class="tabs-container products__container">
                    <div id="product-tab-1" class = "tabs-content products__content tabs-content--active">
                        <div class="product-slider">
                            @foreach($softenToys as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                    <div id="product-tab-2" class="tabs-content products__content">
                        <div class="product-slider">
                            @foreach($interactiveToys as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                    <div id="product-tab-3" class="tabs-content products__content">
                        <div class="product-slider">
                            @foreach($characterToys as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                    <div id="product-tab-4" class="tabs-content products__content">
                        <div class="product-slider">
                            @foreach($toyAccessories as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="product__more">
                    <a class="product__more-link" href="#">Показать еще</a>
                </div>
            </div>
        </div>
    </section>


    <div class="banner">
        <div class="container">
            <a class="banner-link" href="#">
                <img src="images/banner.jpg" alt="">
            </a>
        </div>
    </div>

    <section class="products">
        <div class="container">
            <div class="products__inner">
                <h3 class="products__title">
                    С этим товаром покупают
                </h3>
                <div class="tabs-wrapper">
                    <div class="tabs products__tabs mobile-overflow">
                        <a class="tab products__tab tab--active" href="#popular-tab-1">мягкие игрушки</a>
                        <a class="tab products__tab" href="#popular-tab-2">интерактивные игрушки</a>
                        <a class="tab products__tab" href="#popular-tab-3">персонажи мультфильмов</a>
                        <a class="tab products__tab" href="#popular-tab-4">мягкие аксессуары</a>
                    </div>
                </div>
                <div class="tabs-container products__container">
                    <div id="popular-tab-1" class = "tabs-content products__content tabs-content--active">
                        <div class="product-slider">
                            @foreach($softenToys as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                    <div id="popular-tab-2" class="tabs-content products__content">
                        <div class="product-slider">
                            @foreach($interactiveToys as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                    <div id="popular-tab-3" class="tabs-content products__content">
                        <div class="product-slider">
                            @foreach($characterToys as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                    <div id="popular-tab-4" class="tabs-content products__content">
                        <div class="product-slider">
                            @foreach($toyAccessories as $product)
                                @include('start_page.product_card', compact($product))
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
