<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Bintaro Jaya</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

        @yield('custom-css')

    </head>
    <body>

        <div class="menu_mobile">
            <div class="menu__logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/svg/bintaro-jaya-logo.svg')}}" width="200px" alt="logo bintaro">
                </a>
            </div>
            <div id="menu-hamburger" class="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="menu_showcase">
            <ul>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('experiences')}}">Experiences</a></li>
                <li><a href="{{route('partners')}}">Partners</a></li>
                <li><a href="{{route('products')}}">Products</a></li>
                <li><a href="{{route('news')}}">News/ Articles</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </div>

        @yield('header')
        @yield('main')


        @if (Request::segment(1) == "experiences" && Request::segment(2) == true || Request::segment(2) == "experiences" && Request::segment(3) == true)
        <div class="section__news">
            <h2><a href="{{route('experiences.slug',$experiences_category[$next_id[0]->next - 1]->slug)}}">{{$experiences_category[$next_id[0]->next - 1]->name}}</a></h2>
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="section__news--text">
                            <h4>MORE EXPERIENCES</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="section__news--action">
                            <div class="dots_custom dts-2"></div>
                            <ul class="arrow">
                                <li class="news-prev"><img src="{{asset('images/svg/black-arrow-left.svg')}}" width="25px" alt="arrow"></li>
                                <li class="news-next"><img src="{{asset('images/svg/black-arrow-right.svg')}}" width="25px" alt="arrow"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row g-0 news-slider">
                    @foreach ($experiences_category as $key => $item)
                        <div class="col-12 col-lg-3">
                            <div class="section__news--item">
                                <a href="">
                                    <img src="{{asset('images/experiences/banner')}}/{{$item->image_banner}}" width="100%" height="100%" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
        <div class="section__news">
            <h2>Informasi dan artikel terbaru seputar Bintaro Jaya</h2>
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="section__news--text">
                            <h4>FIND YOUR NEWS/ ARTICLES</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="section__news--action">
                            <div class="dots_custom dts-2"></div>
                            <ul class="arrow">
                                <li class="news-prev"><img src="{{asset('images/svg/black-arrow-left.svg')}}" width="25px" alt="arrow"></li>
                                <li class="news-next"><img src="{{asset('images/svg/black-arrow-right.svg')}}" width="25px" alt="arrow"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row g-0 news-slider">
                    @foreach ($news as $key => $item)
                        <div class="col-12 col-lg-3">
                            <div class="section__news--item">
                                <a href="{{route('news.data',$item->news_slug)}}">
                                    <div class="hover-blue">
                                        <p>{{$item->news_title}}</p>
                                    </div>
                                    <img src="{{asset('images')}}/{{$item->news_image_home}}" width="100%" height="100%" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif


        @yield('news_promo')
        <footer>
            <div class="info__wrapper">
                <div class="container-fluid g-0">
                    <div class="row g-0">
                        <div class="col-12 col-lg-6">
                            <div class="info__wrapper-contact">
                                <h5>CONTACT US</h5>
                                <h3>Marketing Gallery</h3>
                                <p>Boulevard Bintaro Jaya<br>Blok B7/C2 No.1 Bintaro Jaya Sektor 7,<br>Tangerang 15224</p>
                                <ul>
                                    <li><a href=""><span><img src="{{asset('images/svg/phone-logo-white.svg')}}" alt=""></span>+62 21 745 4545</a></li>
                                    <li><a href=""><span><img src="{{asset('images/svg/whatsapp-logo-white.svg')}}" alt=""></span>+62 817 745 455</a></li>
                                    <li><a href=""><span class="fb"><img src="{{asset('images/svg/facebook-logo-white.svg')}}" alt=""></span>@bintarojaya.official</a></li>
                                    <li><a href=""><span><img src="{{asset('images/svg/instagram-logo-white.svg')}}" alt=""></span>Bintaro Jaya Official</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="info__wrapper-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63455.81323837532!2d106.66383374243611!3d-6.265264689034678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1628640782276!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="copyright">
                                <img src="{{asset('images/svg/bintaro-jaya-logo.svg')}}" width="200px" alt="logo bintaro">
                                <div>
                                    <p>Contact Us Legal & Privacy Accesbility</p>
                                    <p>Copyright 2020 Pembangunan Jaya. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="float-sosmed">
            <ul>
                <li><a href="https://api.whatsapp.com/send?phone=6281774545455" target="_blank" rel="noopener"><img src="{{asset('images/whatsapp-icon.png')}}" width="30px" alt="" srcset=""></a></li>
                <li><a href="mailto:bintarojaya@gmail.com" target="_blank" rel="noopener""><img src="{{asset('images/email-icon.png')}}"  width="30px" alt="" srcset=""></a></li>
                <li><a href="tel:+0217454545" target="_blank" rel="noopener""><img src="{{asset('images/phone-icon.png')}}" width="30px" alt="" srcset=""></a></li>
            </ul>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        @yield('script')
        </body>
</html>


