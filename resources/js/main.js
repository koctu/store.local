$(function () {
    $('.banner-section__slider').slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<button class="banner-section__slider-btn banner-section__slider-btnprev"><img src="images/arrow-left.png" alt=""></button>',
        nextArrow: '<button class="banner-section__slider-btn banner-section__slider-btnnext"><img src="images/arrow-right.png" alt=""></button>',
        responsive: [
            {
                breakpoint: 937,
                settings: {
                    arrows: false,
                }
            }
        ]
    });

    $('.tab').on('click', function (e) {
        e.preventDefault();

        $($(this).siblings()).removeClass('tab--active');
        $($(this).closest('.tabs-wrapper').siblings().find('div')).removeClass('tabs-content--active');

        $(this).addClass('tab--active');
        $($(this).attr('href')).addClass('tabs-content--active');

        $('.product-slider').slick('setPosition');
    });

    $('.product-item__favorite').on('click', function () {
        $(this).toggleClass('product-item__favorite--active');
    });


    $('.product-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="product-slider__slider-btn product-slider__slider-btnprev"><img src="images/arrow-left-bottom.png" alt=""></button>',
        nextArrow: '<button class="product-slider__slider-btn product-slider__slider-btnnext"><img src="images/arrow-right-bottom.png" alt=""></button>',
        responsive: [
            {
                breakpoint: 1301,
                settings: {
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 1141,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    dots: true
                }
            },
            {
                breakpoint: 911,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    dots: true
                }
            },
            {
                breakpoint: 626,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    dots: true
                }
            }
        ]
    });


    $('.filter-style').styler();

    $('.filter__item-drop, .filter__extra').on('click', function () {
        $(this).toggleClass('filter__item-drop--active');
        $(this).next().slideToggle('200');
    });

    $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 3000000
    });

    $('.catalog__filter-btngrid').on('click', function () {
        $(this).addClass('catalog__filter-button--active');
        $('.catalog__filter-btnline').removeClass('catalog__filter-button--active');
        $('.product-item__wrapper').removeClass('product-item__wrapper--list');
    });

    $('.catalog__filter-btnline').on('click', function () {
        $(this).addClass('catalog__filter-button--active');
        $('.catalog__filter-btngrid').removeClass('catalog__filter-button--active');
        $('.product-item__wrapper').addClass('product-item__wrapper--list');
    });

    $(".rate-yo").rateYo({
        ratedFill: "#d14c18",
        normalFill: "#c4c4c4",
        spacing: "7px"
    });


});


$(".footer__topdrop").on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('footer__topdrop--active');
});

$(".menu__btn").on('click', function () {
    $('.menu-mobile__list').toggleClass('menu-mobile__list--active');
});

$(".aside__btn").on('click', function () {
    $(this).next().slideToggle();
});
