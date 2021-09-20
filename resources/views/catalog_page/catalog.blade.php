@extends('app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list mobile-overflow">
                    <li class="breadcrumbs__list-item">
                        <a href="/">Главная</a>
                    </li>
                    <li class="breadcrumbs__list-item">
                        <a href="/catalog={{ $category->id }}">{{ $category->name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="catalog">
        <div class="container">
            <h2 class="catalog__title">
                Мягкие игрушки
            </h2>
            <div class="catalog__filter">
                <div class="catalog__filter-itemsinner">
                    <div class="catalog__filter-items mobile-overflow">
                        <button>Образные</button>
                        <button>Сенсорные</button>
                        <button>Большие</button>
                        <button>Маленькие</button>
                        <button>от 2000</button>
                    </div>
                </div>

                <div class="catalog__filter-btn">
                    <select class="filter-style select-item">
                        <option>По популярности</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                    <button class="catalog__filter-btngrid catalog__filter-button catalog__filter-button--active">
                        <img src="images/ingrid.png" alt="">
                    </button>
                    <button class="catalog__filter-btnline catalog__filter-button">
                        <img src="images/inline.png" alt="">
                    </button>
                </div>
            </div>
            <div class="catalog__inner">
                <div class="aside__btn">ФИЛЬТР</div>
                <aside class="catalog__inner-asaid asaid-filter">
                    <div class="tabs-wrapper tabs-wrapper--no-scroll">
                        <div class="tabs asaid-filter__tabs">
                            <a class="tab asaid-filter__tab tab--active" href="#filter-1"><span>Параметры</span></a>
                            <a class="tab asaid-filter__tab" href="#filter-2"><span>По марке</span></a>
                        </div>
                    </div>
                    <div class="tabs-container">
                        <div id="filter-1" class="tabs-content asaid-filter__tabs-content tabs-content--active">

                            <form method="GET" class="asaid-filter__form" action="">
                                <ul class="asaid-filter__list">
                                    <li class="asaid-filter__item-drop">
                                        <p class="asaid-filter__item-title filter__item-drop filter__item-drop--active">
                                            Наличие
                                        </p>
                                        <div class="asaid-filter__content">
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" type="checkbox" name="in_stock" {{ request()->in_stock == 'on' ? 'checked' : '' }}>
                                                    В наличии
                                                </label>
                                            </div>
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" type="checkbox" name="to_order" {{ request()->to_order == 'on' ? 'checked' : '' }}>
                                                    Под заказ
                                                </label>
                                            </div>
                                        </div>
                                    </li>




                                    <li class="asaid-filter__item-drop">
                                        <p class="asaid-filter__item-title filter__item-drop filter__item-drop--active">
                                            Новинки
                                        </p>
                                        <div class="asaid-filter__content asaid-filter__content-radio">
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" name="radio" type="radio" value="all" {{ request()->radio == 'all' ? 'checked' : '' }}>
                                                    Все
                                                </label>
                                            </div>
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" name="radio" type="radio" value="new" {{ request()->radio == 'new' ? 'checked' : '' }}>
                                                    Новинки
                                                </label>
                                            </div>
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" name="radio" type="radio" value="sale" {{ request()->radio == 'sale' ? 'checked' : '' }}>
                                                    Акции
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="asaid-filter__item-drop">
                                        <p class="asaid-filter__item-title filter__item-drop filter__item-drop--active">
                                            Цена
                                        </p>
                                        <div class="asaid-filter__content">
                                            <input type="text" class="js-range-slider" name="price_range"
                                                   data-type="double" data-min="0" data-max="30000" data-from="{{ $min == 3639 ? '3000' : $min }}"
                                                   data-to="{{ $max == 30000 ? '14000' : $max }}" data-grid="true" />
                                        </div>
                                    </li>
                                    <li class="asaid-filter__item-list">
                                        <div class="filter__item-list">
                                            <p class="filter__item-listtitle">
                                                Пол
                                            </p>
                                            <select name="gender" class="filter-style filter__item-listselect">
                                                <option value="other" {{ request()->gender == 'other' ? 'selected' : '' }}>Любой</option>
                                                <option value="male" {{ request()->gender == 'male' ? 'selected' : '' }}>Для мальчиков</option>
                                                <option value="female" {{ request()->gender == 'female' ? 'selected' : '' }}>Для девочек</option>
                                            </select>
                                        </div>
                                        <div class="filter__item-list">
                                            <p class="filter__item-listtitle">
                                                Возраст
                                            </p>
                                            <select name="age" class="filter-style filter__item-listselect">
                                                <option value="7">Любой</option>
                                                <option value="0">0-6 месяцев</option>
                                                <option value="1">6-12 месяцев</option>
                                                <option value="2">1-3 года</option>
                                                <option value="3">3-5 лет</option>
                                                <option value="4">5-7 лет</option>
                                                <option value="5">7-12 лет</option>
                                                <option value="6">12+ лет</option>
                                            </select>
                                        </div>
                                    </li>




                                    <li class="asaid-filter__item-drop">
                                        <p class="asaid-filter__item-title filter__item-drop filter__item-drop--active">
                                            Бренд
                                        </p>
                                        <div class="asaid-filter__content trademark toggled">
                                            <input class="filter-search" type="text" placeholder="Поиск">
{{--                                            тут выводит бренды--}}
                                        </div>
                                        <div class="filter-more">
                                            <a class="filter-more__btn brnd">Показать еще</a>
                                        </div>
                                    </li>

                                    <li class="asaid-filter__item-drop btn-checked">
                                        <p class="asaid-filter__item-title filter__item-drop filter__item-drop--active">
                                            Акции
                                        </p>
                                        <div class="asaid-filter__content">
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    <span class="btn-checked__text">SALE</span>
                                                </label>
                                            </div>
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    <span class="btn-checked__text">NEW</span>
                                                </label>
                                            </div>
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    <span class="btn-checked__text">HIT</span>
                                                </label>
                                            </div>
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style" type="checkbox" checked>
                                                    <span class="btn-checked__text">ДИЛЕР</span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="asaid-filter__item-drop">
                                        <p class="asaid-filter__item-title filter__item-drop filter__item-drop--active">
                                            Страна
                                        </p>
                                        <div class="asaid-filter__content country toggled fixed">
                                            {{--вывод стран--}}
                                        </div>
                                        <div class="filter-more">
                                            <button class="filter-more__btn cntr" href="#">Показать еще</button>
                                        </div>
                                    </li>

                                    <li class="asaid-filter__item-drop asaid-filter__item-btn">
                                        <button class="filter-btn__send filter-btn__send--active"
                                                type="submit" onclick="save()">ВЫБРАТЬ</button>
                                        <p class="filter__extra">Дополнительные параметры</p>
                                        <div class="filter__extra__content">more</div>
                                        <button class="filter-btn__reset" type="submit">Сбросить фильтр</button>
                                    </li>

                                </ul>
                            </form>

                        </div>
                        <div id="filter-2" class="tabs-content asaid-filter__tabs-content">content-2</div>
                    </div>
                </aside>
                <div class="catalog__inner-list">

                    @foreach($products as $product)
                        @include('catalog_page.product_card', compact('product'))
                    @endforeach

                    <div class="pagination">
                        {{ $products->links('catalog_page.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
