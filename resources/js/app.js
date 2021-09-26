require('./bootstrap');

$( document ).ready(function() {

// $('body').css('display','none')

// $("body").keyup(function(event) {
//     if (event.keyCode === 13) {
//         $('body').css('display','block')
//     }
// });

if (location.pathname == '/contact-us') {
    $('.section__news').hide()
}


if (location.pathname === '/news') {
    $('.dots_custom').hide()
    $('.section__news--action').css('justify-content','flex-end')
}

let item_percentage2 = 100 / 5

for (let i = 0; i < 5; i++) {
    $('.dts-2').append(`<div class="dots_custom-item dts-2-item" style="width:${item_percentage2}%"></div>`)
}

$(".news-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-2-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-2-item').not($(this)).removeClass('active');
        }
    })
});

$('.news-slider').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $('.news-prev'),
    nextArrow: $('.news-next')
});


///////////////////////////////
let item_percentage3 = 100 / 1

for (let i = 0; i < 4; i++) {
    $('.dts-partner1').append(`<div class="dots_custom-item dts-partner1-item" style="width:${item_percentage3}%"></div>`)
}

$(".partner1-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-partner1-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-partner1-item').not($(this)).removeClass('active');
        }
    })
});

$('.partner1-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $('.partner1-prev'),
    nextArrow: $('.partner1-next')
});
///////////////////////

for (let i = 0; i < 4; i++) {
    $('.dts-partner2').append(`<div class="dots_custom-item dts-partner2-item" style="width:${item_percentage3}%"></div>`)
}

$(".partner2-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-partner2-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-partner2-item').not($(this)).removeClass('active');
        }
    })
});

$('.partner2-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $('.partner2-prev'),
    nextArrow: $('.partner2-next')
});
///////////////////////
let item_percentagep3 = 100 / 4

for (let i = 0; i < 4; i++) {
    $('.dts-partner3').append(`<div class="dots_custom-item dts-partner3-item" style="width:${item_percentagep3}%"></div>`)
}

$(".partner3-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-partner3-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-partner3-item').not($(this)).removeClass('active');
        }
    })
});

$('.partner3-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $('.partner3-prev'),
    nextArrow: $('.partner3-next')
});
///////////////////////
let item_percentagep5 = 100 / 4

for (let i = 0; i < 4; i++) {
    $('.dts-partner5').append(`<div class="dots_custom-item dts-partner5-item" style="width:${item_percentagep5}%"></div>`)
}

$(".partner5-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-partner5-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-partner5-item').not($(this)).removeClass('active');
        }
    })
});

$('.partner5-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $('.partner5-prev'),
    nextArrow: $('.partner5-next')
});
///////////////////////
let item_percentagepromo = 100 / 1


for (let i = 0; i < 3; i++) {
    $('.dts-promo').append(`<div class="dots_custom-item dts-promo-item" style="width:${item_percentagepromo}%"></div>`)
}

$(".promo-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-promo-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-promo-item').not($(this)).removeClass('active');
        }
    })
});

$('.promo-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $('.promo-prev'),
    nextArrow: $('.promo-next'),
    variableWidth: true,
    // focusOnSelect: true
});

// EXPERIENCES

for (let i = 0; i < 10; i++) {
    $(`.expDetail-slider${i}`).slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        dots:false,
        prevArrow: $(`.expDetail${i}-prev`),
        nextArrow: $(`.expDetail${i}-next`),
    });
}


// PRODUCT

$('.show-modal').each(function (params) {
    $(this).on('click',function (params) {
        let idModal=$(this).data('modal')
        $(`#${idModal}`).css('visibility','visible');
        $(`#${idModal}`).css('opacity','1');
    })
})

$('.close-modal').each(function (params) {
    $(this).on('click',function (params) {
        let idModal=$(this).data('modal')
        $(`#${idModal}`).css('visibility','hidden');
        $(`#${idModal}`).css('opacity','0');
    })
})

////////////////////////////////
// MOBILE HARUS DIGANTI
// RSEDENTIAL
for (let i = 0; i < 2; i++) {
    $('.dts-categoryProduct1').append(`<div class="dots_custom-item dts-categoryProduct1-item" style="width:${item_percentagepromo}%"></div>`)
}

$(".category1-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-categoryProduct1-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-categoryProduct1-item').not($(this)).removeClass('active');
        }
    })
});

$(`.category1-slider`).slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $(`.category1-prev`),
    nextArrow: $(`.category1-next`),
    variableWidth: true,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
        }
    ]
});

// COMMERCIAL

for (let i = 0; i < 2; i++) {
    $('.dts-categoryProduct2').append(`<div class="dots_custom-item dts-categoryProduct2-item" style="width:${item_percentagepromo}%"></div>`)
}

$(".category2-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    let idx = currentSlide == undefined ? 0 : currentSlide
    $('.dts-categoryProduct2-item').each(function (params) {
        if($(this).index() === idx){
            $(this).addClass('active')
            $('.dts-categoryProduct2-item').not($(this)).removeClass('active');
        }
    })
});

$(`.category2-slider`).slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows:true,
    dots:false,
    prevArrow: $(`.category2-prev`),
    nextArrow: $(`.category2-next`),
    variableWidth: true,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
        }
    ]
});


$('#menu-hamburger').on('click',function (params) {
    console.log('test');
    $('.menu_showcase').toggleClass('active')
})

});
