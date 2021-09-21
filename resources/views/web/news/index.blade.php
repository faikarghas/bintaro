@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/cover3.jpg')}})">
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
            {{-- <div class="caption"><h1>NEWS/ ARTICLES</h1></div> --}}
        </div>
    </header>
@endsection
@section('news_promo')
    <main page="news">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                        <div class="silder_wrapper">
                            <ul class="promo-slider">
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/promo/ads1.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/promo/ads2.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/promo/ads3.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/promo/ads3.jpg')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{asset('images/promo/ads3.jpg')}}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="slider_action">
                            <ul class="arrow">
                                <li class="promo-prev"><img src="{{asset('images/svg/black-arrow-left.svg')}}" width="25px" alt="arrow"></li>
                                <li class="promo-next"><img src="{{asset('images/svg/black-arrow-right.svg')}}" width="25px" alt="arrow"></li>
                            </ul>
                            <div class="dots_customProm dts-promo"></div>
                            <p class="m-0">FIND YOUR PROMO</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


