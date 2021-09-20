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

    function stylerOn(){
        $('.filter-style').styler();
    }

    stylerOn();

    $('.filter__item-drop, .filter__extra').on('click', function () {
        $(this).toggleClass('filter__item-drop--active');
        $(this).next().slideToggle('200');
    });


    let $range = $(".js-range-slider");
    $range.ionRangeSlider({

        type: "double",
        hide_from_to: true,
        min: 0,
        max: 30000,
        from: 3000,
        to: 7000,
        grid: true,
        onChange: function (data){
            let max = $('.irs-max').text(data.to);
            let min = $('.irs-min').text(data.from);
        }
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

function animateSearchBlockFilterBrands(){
    $(".brnd").click(function (e){
        e.preventDefault();
        if ($(".trademark").hasClass("toggled")){
            $(".trademark").animate({"height": "300px"}).removeClass("toggled");
            $(".brnd").text("Скрыть");
        }
        else {
            $(".trademark").animate({"height": "200px"}).addClass("toggled");
            $(".brnd").text("Показать еще");
        }
    });
}

function animateSearchBlockFilterCountries(){
    $(".cntr").click(function (e){
        e.preventDefault();
        if ($(".country").hasClass("toggled")){
            $(".country").removeClass("fixed");
            $(".country").addClass("relative");
            $(".country").animate({"height": "300px"}).removeClass("toggled");
            $(".cntr").text("Скрыть");
        }
        else {
            $(".country").addClass("fixed");
            $(".country").removeClass("relative");
            $(".country").animate({"height": "200px"}).addClass("toggled");
            $(".cntr").text("Показать еще");
        }
    });
}

animateSearchBlockFilterBrands();
animateSearchBlockFilterCountries();


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



function siftBrand(element) {
    return element.match(/brand_checkbox%5B%5D/);
}
function getActiveBrandCheckbox(){
    var url_string = window.location.href
    var url = new URL(url_string);
    var utm = url.search.split('&');
    var filtered = utm.filter(siftBrand);
    for (let filteredKey in filtered) {
        filtered[filteredKey] = filtered[filteredKey].split('brand_checkbox%5B%5D=').join('');
    }
    for (let filteredKey in filtered) {
        filtered[filteredKey] = filtered[filteredKey].split('+').join(' ');
    }
    return filtered;
}

function siftCountry(element) {
    return element.match(/country_checkbox%5B%5D/);
}
function getActiveCountryCheckbox(){
    var url_string = window.location.href
    var url = new URL(url_string);
    var utm = url.search.split('&');
    var filtered = utm.filter(siftCountry);
    for (let filteredKey in filtered) {
        filtered[filteredKey] = filtered[filteredKey].split('country_checkbox%5B%5D=').join('');
    }
    for (let filteredKey in filtered) {
        filtered[filteredKey] = filtered[filteredKey].split('+').join(' ');
    }
    return filtered;
}

getActiveBrandCheckbox();
getActiveCountryCheckbox();

function getAllBrands(){
    $.ajax({
        url: "/api/brands",
        type: "GET",
        dataType: "json",
        success(data){
            for (let index in data){
                if (data[index].checked == true){
                    $('.trademark').append(`
                        <div class="asaid-filter__content-box">
                            <label class="asaid-filter__content-label">
                                <input id="${index}" class="filter-style chkbx-br" type="checkbox" name="brand_checkbox[]" value="${data[index].trademark_name}" checked>
                                ${data[index].trademark_name}
                            </label>
                        </div>
                    `);
                }
                else {
                    $('.trademark').append(`
                <div class="asaid-filter__content-box">
                    <label class="asaid-filter__content-label">
                           <input id="${index}" class="filter-style chkbx-br" type="checkbox" name="brand_checkbox[]" value="${data[index].trademark_name}">
                        ${data[index].trademark_name}
                    </label>
                </div>
            `)
                }
            }
            $('.filter-style').styler();
        }
    });
}

function getAllCountries(){
    $.ajax({
        url: "/api/countries",
        type: "GET",
        dataType: "json",
        success(data){
            for (let index in data){
                if (data[index].checked == true){
                    $('.country').append(`
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style chkbx-cr" type="checkbox" name="country_checkbox[]" value="${data[index].country_name}" checked>
                                                    ${data[index].country_name}
                                                </label>
                                            </div>
                    `);
                }
                else {
                    $('.country').append(`
                                            <div class="asaid-filter__content-box">
                                                <label class="asaid-filter__content-label">
                                                    <input class="filter-style chkbx-cr" type="checkbox" name="country_checkbox[]" value="${data[index].country_name}">
                                                    ${data[index].country_name}
                                                </label>
                                            </div>
                    `)
                }
            }
            $('.filter-style').styler();
        }
    });
}

getAllBrands();
getAllCountries();

let search = $('.filter-search');
search.bind("change keyup input click", function () {
    if (this.value.length >= 2) {
        let str = this.value;
        localStorage.setItem('searchString', str);
        str = localStorage.getItem('searchString');
        $.ajax({
            url: "/api/brands-search",
            type: "POST",
            dataType: "json",
            data: {
                value: str
            },
            success(data) {
                let chk =  $('.trademark > div');
                chk.remove();
                for (let index in data) {
                    if (data[index].checked == true){
                        $('.trademark').append(`
                        <div class="asaid-filter__content-box">
                            <label class="asaid-filter__content-label">
                                <input id="${index}" class="filter-style chkbx-br" type="checkbox" name="brand_checkbox[]" value="${data[index].trademark_name}" checked>
                                ${data[index].trademark_name}
                            </label>
                        </div>
                    `);
                    }
                    else {
                        $('.trademark').append(`
                <div class="asaid-filter__content-box">
                    <label class="asaid-filter__content-label">
                           <input id="${index}" class="filter-style chkbx-br" type="checkbox" name="brand_checkbox[]" value="${data[index].trademark_name}">
                        ${data[index].trademark_name}
                    </label>
                </div>
            `)
                    }
                }
                $('.filter-style').styler();
                if (chk.length < 3){
                    $(".trademark").animate({"height": "120px"}).removeClass("toggled");
                    $(".brnd").hide();
                }
                else if ($('.trademark > div').length < 5){
                    $(".trademark").animate({"height": "180px"}).removeClass("toggled");
                    $(".brnd").hide();
                }
                else {
                    $(".trademark").animate({"height": "200px"}).addClass("toggled");
                    $(".brnd").show();
                }
            }
        });
    }
    else if(this.value.length <= 0){
        localStorage.removeItem('searchString');
        $('.trademark > div').remove();
        getAllBrands();
        $(".trademark").animate({"height": "200px"}).addClass("toggled");
        $(".brnd").show();
    }
});



if (localStorage.key(0) != null){
    let str = localStorage.getItem('searchString');
    search.val(str);
    $.ajax({
        url: "/api/brands-search",
        type: "POST",
        dataType: "json",
        data: {
            value: str
        },
        success(data) {
            let chk =  $('.trademark > div');
            chk.remove();
            for (let index in data) {
                if (data[index].checked == true){
                    $('.trademark').append(`
                        <div class="asaid-filter__content-box">
                            <label class="asaid-filter__content-label">
                                <input id="${index}" class="filter-style chkbx-br" type="checkbox" name="brand_checkbox[]" value="${data[index].trademark_name}" checked>
                                ${data[index].trademark_name}
                            </label>
                        </div>
                    `);
                }
                else {
                    $('.trademark').append(`
                <div class="asaid-filter__content-box">
                    <label class="asaid-filter__content-label">
                           <input id="${index}" class="filter-style chkbx-br" type="checkbox" name="brand_checkbox[]" value="${data[index].trademark_name}">
                        ${data[index].trademark_name}
                    </label>
                </div>
            `)
                }
            }
            $('.filter-style').styler();
            if (chk.length < 3){

            }
            else if ($('.trademark > div').length < 5){
                $(".trademark").animate({"height": "180px"}).removeClass("toggled");
                $(".brnd").hide();
            }
            else {
                $(".trademark").animate({"height": "200px"}).addClass("toggled");
                $(".brnd").show();
            }
        }
    });
}
else {
    getAllBrands();
}



let checkBoxBrand = $('.chkbx-br');


checkBoxBrand.bind("change keyup input click", function (){
    if (checkBoxBrand.checked) { // если checkbox включен\выключен
        localStorage.setItem('brand', checkBoxBrand.dataset.info);  // записать в storage ключ myinfo, значение из data-info у checkbox
        info.innerHTML = 'Записано ' + checkBoxBrand.dataset.info; // просто вывод статуса на странице
    } else {
        localStorage.removeItem('brand'); // удаление ключа myinfo из storage
        info.innerHTML = 'Удалено ' + checkBoxBrand.dataset.info;
    }
});

let checkBoxCountry = $('.chkbx-cr');


checkBoxCountry.bind("change keyup input click", function (){
    if (checkBoxCountry.checked) { // если checkbox включен\выключен
        localStorage.setItem('country', checkBoxCountry.dataset.info);  // записать в storage ключ myinfo, значение из data-info у checkbox
        info.innerHTML = 'Записано ' + checkBoxCountry.dataset.info; // просто вывод статуса на странице
    } else {
        localStorage.removeItem('country'); // удаление ключа myinfo из storage
        info.innerHTML = 'Удалено ' + checkBoxCountry.dataset.info;
    }
});

$('.custom-number button').click(function(){
    if($(this).is('.plus')){
        $(this).siblings('input')[0].stepUp();
    }else{
        $(this).siblings('input')[0].stepDown();
    }
})














/*
    if (checkBox.checked) { // если checkbox включен\выключен
        localStorage.setItem('myinfo', checkBox.dataset.info);  // записать в storage ключ myinfo, значение из data-info у checkbox
        info.innerHTML = 'Записано ' + checkBox.dataset.info; // просто вывод статуса на странице
    } else {
        localStorage.removeItem('myinfo'); // удаление ключа myinfo из storage
        info.innerHTML = 'Удалено ' + checkBox.dataset.info;
    }

});*/
