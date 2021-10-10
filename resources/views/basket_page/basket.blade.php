@extends('app')

@section('content')
<div class="basket__product">
    <div class="container">
        <div class="basket-wrapper">
            <div class="basket__product-inner">
                @if($var == true)
                    @include('basket_page.card')
                @else
                @endif
            </div>
            <div class="product-inner__buyblock">
                <div class="tabs-wrapper buyblock-wrapper">
                    <a class="tab asaid-filter__tab tab--active tabs-wrapper__pickup" href="#buy-1">Самовывоз</a>
                    <a class="tab asaid-filter__tab tabs-wrapper__delivery" href="#buy-2">Доставка</a>
                </div>
                <form action="{{ route('basket-confirm') }}" method="POST">
                    @csrf
                <div class="tabs-container">
                    <div id="buy-1" class="tabs-content asaid-filter__tabs-content tabs-content--active">
                        <p class="buy__content-label">Магазин</p>
                        <div class="asaid-filter__content asaid-filter__content-radio aside__buyblock">
                            <div class="asaid-filter__content-box aside__buyblock-contentbox">
                                <label class="asaid-filter__content-label">
                                    <input class="filter-style" name="shop" type="radio" value="0">
                                    Ул. Братьев Кашириных 129
                                </label>
                            </div>
                            <div class="asaid-filter__content-box aside__buyblock-contentbox">
                                <label class="asaid-filter__content-label ">
                                    <input class="filter-style" name="shop" type="radio" value="1">
                                    Ул. Братьев Кашириных 129
                                </label>
                            </div>
                            <div class="asaid-filter__content-box aside__buyblock-contentbox">
                                <label class="asaid-filter__content-label">
                                    <input class="filter-style" name="shop" type="radio" value="2">
                                    Ул. Братьев Кашириных 129
                                </label>
                            </div>
                            <div class="asaid-filter__content-box aside__buyblock-contentbox">
                                <label class="asaid-filter__content-label">
                                    <input class="filter-style" name="shop" type="radio" value="3">
                                    Ул. Братьев Кашириных 129
                                </label>
                            </div>
                        </div>
                        <div class="asaid-map" id="map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A73dbf2532852df814b12ef47896279c086c29db47031a41c89b76ad90ca91516&amp;width=240&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <div class="tabs-content__payment">
                            <p class="tabs-content__payment-title">Способ оплаты</p>
                            <div class="asaid-filter__content asaid-filter__content-radio">
                                <div class="asaid-filter__content-box aside__payment-block">
                                    <label class="asaid-filter__content-label aside__payment">
                                        <img src="images/payment-nal.png" alt="">
                                        Наличными
                                        <input class="filter-style style-payment" name="payment" type="radio" value="cash">
                                    </label>
                                </div>
                                <div class="asaid-filter__content-box aside__payment-block">
                                    <label class="asaid-filter__content-label aside__payment">
                                        <img src="images/payment-card.png" alt="">
                                        Картой
                                        <input class="filter-style style-payment" name="payment" type="radio" value="card">
                                    </label>
                                </div>
                                <div class="asaid-filter__content-box aside__payment-block">
                                    <label class="asaid-filter__content-label aside__payment">
                                        <img src="images/payment-online.png" alt="">
                                        Онлайн
                                        <input class="filter-style style-payment" name="payment" type="radio" value="online">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="result-price__wrapper">
                            <p class="result-price__title">Итого</p>
                            <p class="result-price__title-price">
                                @if($var == true)
                                    {{ $order->getFullPrice() }} ₽
                                @else
                                    0 ₽
                                @endif
                                </p>
                        </div>
                            @csrf
                        <div class="result-price__button">
                            <button class="result-button">Перейти к оплате</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection