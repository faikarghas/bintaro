@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/cover4.jpg')}})">
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
    <div page="category">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                        <div class="list__category_wrapper">
                            <div class="list__category category-slider">
                                <div class="list__category-item">
                                    <a href="{{route('category.data.slug',['resedential-area','bukit-menteng-residences'])}}">
                                        <img src="{{asset('images/pict20.jpg')}}" alt="">
                                        <p>Bukit Menteng Residences</p>
                                    </a>
                                </div>
                                <div class="list__category-item">
                                    <a href="">
                                        <img src="{{asset('images/pict21.jpg')}}" alt="">
                                        <p>Kebayoran Residences</p>
                                    </a>
                                </div>
                                <div class="list__category-item">
                                    <a href="">
                                        <img src="{{asset('images/pict22.jpg')}}" alt="">
                                        <p>Discovery Residences</p>
                                    </a>
                                </div>
                                <div class="list__category-item">
                                    <a href="">
                                        <img src="{{asset('images/pict21.jpg')}}" alt="">
                                        <p>Bukit Menteng Residences</p>
                                    </a>
                                </div>
                                <div class="list__category-item">
                                    <a href="">
                                        <img src="{{asset('images/pict22.jpg')}}" alt="">
                                        <p>Kebayoran Residences</p>
                                    </a>
                                </div>
                            </div>
                            <div class="slider-action">
                                <ul class="arrow">
                                    <li class="category-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                    <li class="category-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                </ul>
                                <div class="dots_custom dts-categoryProduct"></div>
                                <p class="m-0">FIND YOUR PROMO</p>
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
@endsection