@foreach($order->products as $product)
    <div class="product-inner__item">
        <img class="product-inner__img" src="{{ $product->image }}" alt="">
        <div class="product-inner__data">
            <h4 class="data__title">{{ $product->trademark_id }}</h4> <br> <h5>{{ $product->title }}</h5>
            <p class="data__code product-card__code">Код товара: {{ $product->barcode }}</p>
        </div>
        <p class="product-inner__price">
            {{ $product->getPriceForCount() }} ₽
        </p>
        <div class="product-inner__btn">

            <div class="custom-number">
                <form action="{{ route('basket-remove', $product) }}" method="POST">
                    @csrf
                <button class="minus">-</button>
                </form>
                <input type="number" min="1" max="200" step="1" value="{{ $product->pivot->count }}"/>
                <form action="{{ route('basket-add', $product) }}" method="POST">
                    @csrf
                <button class="plus">+</button>
                </form>
            </div>
            <form action="{{ route('basket-remove-all', $product) }}" method="POST">
                @csrf
            <button class="product-inner__delete">

            </button>
            </form>
        </div>
    </div>
@endforeach
