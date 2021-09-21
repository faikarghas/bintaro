@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/banner-product.jpeg')}})">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12">
                    <menu>
                        <div class="menu__logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/svg/bintaro-jaya-logo.svg')}}" width="200px" alt="logo bintaro">
                            </a>
                        </div>
                        @include('components.presentational.menuDesktop')
                    </menu>
                </div>
            </div>
            {{-- <div class="caption"><h1>PRODUCTS</h1></div> --}}
        </div>
    </header>
@endsection
@section('main')
    <main page="product">
        <section class="section__first">
            <div class="bg-half-grey"></div>
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                        <div class="product__container">
                            <div class="product__row">
                                <div class="product__item show-modal" data-modal="resedential">
                                    <img src="{{asset('images/pict14.jpg')}}" alt="" srcset="">
                                    <h4>Residential Area</h4>
                                </div>
                                <div class="product__item show-modal" data-modal="commercial">
                                    <img src="{{asset('images/pict15.jpg')}}" alt="" srcset="">
                                    <h4>Commercial Area</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                        <div class="product__map">
                            <div class="product__map_act">
                                <img src="{{asset('images/maps.jpg')}}" width="100%" alt="" srcset="">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <p class="active" id="residential-tab" data-bs-toggle="tab" data-bs-target="#pills-residential" type="button" role="tab" aria-controls="home" aria-selected="true">Residential</p>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <p class="" id="commercial-tab" data-bs-toggle="tab" data-bs-target="#pills-commercial" type="button" role="tab" aria-controls="profile" aria-selected="false">Commercial</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__map_wrapper">
                                <div class="product__map_wrapper-box">
                                    <div class="tab-content" id="pills-tab">
                                        <div class="tab-pane fade show active" id="pills-residential" role="tabpanel" aria-labelledby="residential-map-tab">
                                            <div class="container h-100">
                                                <div class="row h-100">
                                                    <div class="col-12 col-lg-6">
                                                        <div>
                                                            <ul class="arrow mb-5">
                                                                <li class="res-prev"><img src="{{asset('images/arrow-left-white.png')}}" width="25px" alt="arrow"></li>
                                                                <li class="res-next"><img src="{{asset('images/arrow-right-white.png')}}" width="25px" alt="arrow"></li>
                                                            </ul>
                                                            <div class="mapcontent-slider">
                                                                <div class="space-beetwen-vertical">
                                                                    <div class="content mb-5">
                                                                        <h4>Kebayoran Residences</h4>
                                                                        <p>Nikmati kehidupan bergengsi di lokasi strategis dengan fasilitas yang berkualitas</p>
                                                                    </div>
                                                                    <div>
                                                                        <a class="learn-wbox" href="{{route('category.data.slug',['resedential-area','kebayoran-residences'])}}">Learn More</a>
                                                                    </div>
                                                                </div>
                                                                <div class="space-beetwen-vertical">
                                                                    <div class="content">
                                                                        <h4>Discovery Residences</h4>
                                                                        <p>Nikmati kehidupan bergengsi di lokasi strategis dengan fasilitas yang berkualitas</p>
                                                                    </div>
                                                                    <div>
                                                                        <a class="learn-wbox"  href="{{route('category.data.slug',['resedential-area','discovery-residences'])}}">Learn More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="mapimg-slider imgSlider">
                                                            <img data-slider="0" src="{{asset('/images/products/kebayoran_bawah.jpg')}}" alt="">
                                                            <img data-slider="1" src="{{asset('/images/products/discovery_bawah.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show" id="pills-commercial" role="tabpanel" aria-labelledby="commercial-map-tab">
                                            <div class="container h-100">
                                                <div class="row h-100">
                                                    <div class="col-12 col-lg-6">
                                                        <div>
                                                            <ul class="arrow mb-5">
                                                                <li class="com-prev"><img src="{{asset('images/arrow-left-white.png')}}" width="25px" alt="arrow"></li>
                                                                <li class="com-next"><img src="{{asset('images/arrow-right-white.png')}}" width="25px" alt="arrow"></li>
                                                            </ul>
                                                            <div class="mapcontent2-slider">
                                                                <div class="space-beetwen-vertical">
                                                                    <div class="content mb-5">
                                                                        <h4>Kebayoran Arcade 5</h4>
                                                                    </div>
                                                                    <div>
                                                                        <a class="learn-wbox" href="{{route('category.data.slug',['commercial-area','kebayoran-arcade-5'])}}">Learn More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="mapimg2-slider imgSlider">
                                                            <img data-slider="0" src="{{asset('/images/commercial.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="popup-category" id="resedential">
        <img class="close-modal" data-modal="resedential" src="{{asset('/images/cancel.png')}}" width="20px" alt="">
        <div page="category">
            <section class="section__first">
                <div class="container-fluid g-0">
                    <div class="row g-0">
                        <div class="col-12 col-lg-12">
                            <div class="list__category_wrapper">
                                <div class="list__category category1-slider">
                                    <div class="list__category-item">
                                        <a href="" style="pointer-events: none;">
                                            <img src="{{asset('images/pict20.jpg')}}" alt="">
                                            <p>Bukit Menteng Residences</p>
                                        </a>
                                    </div>
                                    <div class="list__category-item">
                                        <a href="{{route('category.data.slug',['resedential-area','kebayoran-residences'])}}">
                                            <img src="{{asset('images/pict21.jpg')}}" alt="">
                                            <p>Kebayoran Residences</p>
                                        </a>
                                    </div>
                                    <div class="list__category-item">
                                        <a href="{{route('category.data.slug',['resedential-area','discovery-residences'])}}">
                                            <img src="{{asset('images/pict22.jpg')}}" alt="">
                                            <p>Discovery Residences</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="slider-action">
                                    <ul class="arrow">
                                        <li class="category1-prev"><img src="{{asset('images/svg/black-arrow-left.svg')}}" width="25px" alt="arrow"></li>
                                        <li class="category1-next"><img src="{{asset('images/svg/black-arrow-right.svg')}}" width="25px" alt="arrow"></li>
                                    </ul>
                                    <div class="dots_custom dts-categoryProduct1"></div>
                                    <p class="m-0">FIND YOUR RESIDENCES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__second">
                <div class="container-fluid g-0">
                    <div class="row g-0">
                        <div class="col-12 col-lg-12">
                            <div class="product__map">
                                <div>
                                    <img src="{{asset('images/maps.jpg')}}" width="100%" alt="" srcset="">
                                </div>
                                <div class="product__map_wrapper">
                                    <div class="product__map_wrapper-box">
                                        <div class="container h-100">
                                            <div class="row h-100">
                                                <div class="col-12 col-lg-6">
                                                    <div class="space-beetwen-vertical">
                                                        <ul class="arrow">
                                                            <li class="about-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                                            <li class="about-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                                        </ul>
                                                        <div class="map-content-slider">
                                                            <div>
                                                                <div class="content">
                                                                    <h4>Bukit Menteng Residences2</h4>
                                                                    <p>Nikmati kehidupan bergengsi di lokasi strategis dengan fasilitas yang berkualitas</p>
                                                                </div>
                                                                <div>
                                                                    <a class="learn-wbox" href="">Learn More</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="content">
                                                                    <h4>Bukit Menteng Residences2</h4>
                                                                    <p>Nikmati kehidupan bergengsi di lokasi strategis dengan fasilitas yang berkualitas</p>
                                                                </div>
                                                                <div>
                                                                    <a class="learn-wbox" href="">Learn More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="imgSlider">
                                                        <img src="{{asset('/images/product-foto.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="popup-category" id="commercial">
        <img class="close-modal" data-modal="commercial" src="{{asset('/images/cancel.png')}}" width="20px" alt="">
        <div page="category">
            <section class="section__first">
                <div class="container-fluid g-0">
                    <div class="row g-0">
                        <div class="col-12 col-lg-12">
                            <div class="list__category_wrapper">
                                <div class="list__category category2-slider">
                                    <div class="list__category-item">
                                        <a href="{{route('category.data.slug',['commercial-area','kebayoran-arcade-5'])}}">
                                            <img src="{{asset('images/commercial.jpg')}}" alt="">
                                            <p>Kebayoran Arcade 5</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="slider-action">
                                    <ul class="arrow">
                                        <li class="category2-prev"><img src="{{asset('images/svg/black-arrow-left.svg')}}" width="25px" alt="arrow"></li>
                                        <li class="category2-next"><img src="{{asset('images/svg/black-arrow-right.svg')}}" width="25px" alt="arrow"></li>
                                    </ul>
                                    <div class="dots_custom dts-categoryProduct"></div>
                                    <p class="m-0">FIND YOUR COMMERCIAL AREA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__second">
                <div class="container-fluid g-0">
                    <div class="row g-0">
                        <div class="col-12 col-lg-12">
                            <div class="product__map">
                                <div>
                                    <img src="{{asset('images/maps.jpg')}}" width="100%" alt="" srcset="">
                                </div>
                                <div class="product__map_wrapper">
                                    <div class="product__map_wrapper-box">
                                        <div class="container h-100">
                                            <div class="row h-100">
                                                <div class="col-12 col-lg-6">
                                                    <div class="space-beetwen-vertical">
                                                        <ul class="arrow">
                                                            <li class="about-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                                            <li class="about-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                                        </ul>
                                                        <div class="content">
                                                            <h4>Bukit Menteng Residences</h4>
                                                            <p>Nikmati kehidupan bergengsi di lokasi strategis dengan fasilitas yang berkualitas</p>
                                                        </div>
                                                        <div>
                                                            <a class="learn-wbox" href="">Learn More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="imgSlider">
                                                        <img src="{{asset('/images/product-foto.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (params) {

            $(".mapcontent-slider").on('init reInit', function(event, slick, currentSlide, nextSlide){
                let idx = currentSlide == undefined ? 0 : currentSlide
                let dataSlider = $('.mapimg-slider').data('slider')
                let idxImg = $('.mapimg-slider').children().eq(idx);
            });

            $('.mapcontent-slider').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                dots:false,
                fade:true,
                prevArrow: $('.res-prev'),
                nextArrow: $('.res-next'),
                // asNavFor: $('.mapimg-slider')
            })

            $(".mapcontent-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                let idx = currentSlide == undefined ? 0 : currentSlide
                let dataSlider = $('.mapimg-slider').data('slider')
                let idxImg = $('.mapimg-slider').children().eq(idx);
                if (idx === 0) {
                    $('.mapimg-slider').children().eq(1).css('z-index',0)
                    $('.mapimg-slider').children().eq(0).css('z-index',1)
                } else {
                    $('.mapimg-slider').children().eq(0).css('z-index',0)
                    $('.mapimg-slider').children().eq(1).css('z-index',1)
                }
            });

            $(".mapcontent2-slider").on('init reInit', function(event, slick, currentSlide, nextSlide){
                let idx = currentSlide == undefined ? 0 : currentSlide
                let dataSlider = $('.mapimg2-slider').data('slider')
                let idxImg = $('.mapimg2-slider').children().eq(idx);
            });

            $('.mapcontent2-slider').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                dots:false,
                fade:true,
                prevArrow: $('.com-prev'),
                nextArrow: $('.com-next'),
            })

            $(".mapcontent2-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                let idx = currentSlide == undefined ? 0 : currentSlide
                let dataSlider = $('.mapimg2-slider').data('slider')
                let idxImg = $('.mapimg2-slider').children().eq(idx);
                if (idx === 0) {
                    $('.mapimg2-slider').children().eq(1).css('z-index',0)
                    $('.mapimg2-slider').children().eq(0).css('z-index',1)
                } else {
                    $('.mapimg2-slider').children().eq(0).css('z-index',0)
                    $('.mapimg2-slider').children().eq(1).css('z-index',1)
                }
            });

            function destroyCarousel(i) {
                if ($(`.mapcontent2-slider`).hasClass('slick-initialized')) {
                    $(`.mapcontent2-slider`).slick('unslick');
                }
            }
            function applySlider(i) {
                $('.mapcontent2-slider').slick({
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows:true,
                    dots:false,
                    fade:true,
                    prevArrow: $('.com-prev'),
                    nextArrow: $('.com-next'),
                })
            }

            $('.nav-item').each(function (params) {
                $(this).on('click',function name(params) {
                    $('.mapcontent2-slider').slick('setPosition', 0);
                    console.log('click');
                })
            })
        })
    </script>
@endsection
