<div class="tabs-wrapper">
    <div class="tabs products__tabs mobile-overflow">
        <a class="tab products__tab tab--active" href="#product-tab-{{$idCategory}}">мягкие игрушки</a>
        <a class="tab products__tab" href="#product-tab-{{$idCategory}}">интерактивные игрушки</a>
        <a class="tab products__tab" href="#product-tab-{{$idCategory}}">персонажи мультфильмов</a>
        <a class="tab products__tab" href="#product-tab-{{$idCategory}}">мягкие аксессуары</a>
    </div>
</div>
<div class="tabs-container products__container">
    <div id="product-tab-1" class = "tabs-content products__content tabs-content--active">
        <div class="product-slider">
            @foreach($products as $product)
                @include('start_page.product_card', compact($product))
            @endforeach
        </div>
    </div>
    <div id="product-tab-3" class="tabs-content products__content">slider-3</div>
    <div id="product-tab-4" class="tabs-content products__content">slider-4</div>
</div>
