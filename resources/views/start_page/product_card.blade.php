<div class="product-slider__item">
    <div class="product-item__wrapper {{ $product->amount < 0 ? 'product-item__not-available' : ' ' }}">
        <button class="product-item__favorite">

        </button>

        <form action="{{ route('basket-add', $product) }}" method="POST">
            @csrf
        <button class="product-item__basket">
            <img src="" alt="">
        </button>
        </form>

        <a class="product-item__notify-link" href="#">
            <span>Сообщить о поступлении</span>
        </a>
        <a class="product-item" href="#">
            @if($product->sale > 0 && $product->new > 0 && $product->hit > 0)
            <div class="product-item__sale">
                SALE
            </div>
            <div class="product-item__new">
                NEW PRODUCT
            </div>
            <div class="product-item__hit">
                HIT
            </div>
            @elseif($product->sale > 0 && $product->new > 0 && $product->hit == 0)
                <div class="product-item__sale">
                    SALE
                </div>
                <div class="product-item__new">
                    NEW PRODUCT
                </div>
            @elseif($product->sale > 0 && $product->new == 0 && $product->hit == 0)
                <div class="product-item__sale">
                    SALE
                </div>
            @elseif($product->sale == 0 && $product->new > 0 && $product->hit > 0)
                <div class="product-item__new">
                    NEW PRODUCT
                </div>
                <div class="product-item__hit">
                    HIT
                </div>
            @elseif($product->sale == 0 && $product->new > 0 && $product->hit == 0)
                <div class="product-item__new">
                    NEW PRODUCT
                </div>
            @elseif($product->sale > 0 && $product->new == 0 && $product->hit > 0)
                <div class="product-item__sale">
                    SALE
                </div>
                <div class="product-item__hit">
                    HIT
                </div>
            @endif
            <p class="product-item__hover-text">
                посмотреть товар
            </p>
            <img class="product-item__img" src="{{ $product->image }}" alt="">
            <h4 class="product-iteem__title">
                {{ $product->trademark_id }} <br>{{ $product->title }}
            </h4>
            <p class="price product-item__price">
                {{ $product->price }} ₽
            </p>
            <p class="product-item__notify-text">
                нет в наличии
            </p>
        </a>
    </div>
</div>
