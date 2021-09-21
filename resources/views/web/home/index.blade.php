@extends('components/layouts.index')
@section('header')
    <header>
        <div class="vid__background">
            <video src="{{asset('images/home/binjay-banner-vid.mp4')}}" loop="" muted="" autoplay="" playsinline="" preload="metadata" >
            </video>
        </div>
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12">
                    <menu>
                        <div class="menu__logo">
                            <img src="{{asset('images/svg/bintaro-jaya-logo.svg')}}" width="200px" alt="logo bintaro">
                        </div>
                        @include('components.presentational.menuDesktop')
                    </menu>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('main')
    <main page="home">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="text-center">
                            <h2 class="mb-5r">Bintaro Jaya, Membangun Generasi Berkualitas.</h2>
                            <div>
                                <div>
                                    <video src="{{asset('images/home/42thjaya.mp4')}}" loop="" muted="" autoplay="" playsinline="" preload="metadata" ></video>
                                </div>
                            </div>
                            {{-- <img src="{{asset('images/home/42thn.png')}}" alt="42 tahun bintaro" srcset=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div class="section__second--img">
                            <ul class="about-slider mb-2">
                                <li>
                                    <img src="{{asset('images/home/about.jpg')}}" alt="42 tahun bintaro" srcset="">
                                </li>
                                <li>
                                    <img src="{{asset('images/home/experience.jpg')}}" alt="42 tahun bintaro" srcset="">
                                </li>
                                <li>
                                    <img src="{{asset('images/home/partner.jpg')}}" alt="42 tahun bintaro" srcset="">
                                </li>
                                <li>
                                    <img src="{{asset('images/home/product.jpg')}}" alt="42 tahun bintaro" srcset="">
                                </li>
                                <li>
                                    <img src="{{asset('images/home/news.jpg')}}" alt="42 tahun bintaro" srcset="">
                                </li>
                                <li>
                                    <img src="{{asset('images/home/contact.jpg')}}" alt="42 tahun bintaro" srcset="">
                                </li>
                            </ul>
                            {{-- <div class="dots_custom dts-1"></div>
                            <div class="about-slider-nav">
                                <div class="slider-learn p-0">
                                    <div class="learn">
                                        <a href="{{route('about')}}">Learn More</a>
                                    </div>
                                    <div class="learn">
                                        <a href="{{route('experiences')}}">Learn More</a>
                                    </div>
                                    <div class="learn">
                                        <a href="{{route('partners')}}">Learn More</a>
                                    </div>
                                    <div class="learn">
                                        <a href="{{route('products')}}">Learn More</a>
                                    </div>
                                    <div class="learn">
                                        <a href="{{route('news')}}">Learn More</a>
                                    </div>
                                    <div class="learn">
                                        <a href="{{route('contact')}}">Learn More</a>
                                    </div>
                                </div>
                                <ul class="arrow">
                                    <li class="about-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                    <li class="about-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <div class="slider-about-desc">
                            <div class="section__second--text">
                                <div>
                                    <p class="mb-5">ABOUT US</p>
                                    <h3>Bintaro Jaya, kawasan mandiri berskala kota di selatan Jakarta, yang dikembangkan sejak tahun 1979 oleh PT Jaya Real Property, Tbk. Mengembangkan landed dan highrise residential dalam kawasan yang hijau, berfasilitas lengkap, serta akses dan transportasi yang terintegrasi, sesuai konsep transit-oriented development (TOD).</h3>
                                </div>
                                <ul class="forDesktop">
                                    <li><img src="{{asset('images/home/experience.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/home/partner.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                            <div class="section__second--text">
                                <div>
                                    <p class="mb-5">EXPERIENCES</p>
                                    <h3>Jalani aktivitas dan rasakan pengalaman tanpa batas. Nikmati segala fasilitas yang ada, untuk tumbuh, belajar, bermain, bekerja, belanja, dan bercengkerama.</h3>
                                </div>
                                <ul class="forDesktop">
                                    <li><img src="{{asset('images/home/partner.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/home/product.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                            <div class="section__second--text">
                                <div>
                                    <p class="mb-5">PARTNERS</p>
                                    <h3>Fasilitas penunjang yang dekat dengan hunian menjadi poin penting sebuah pengembangan kawasan, terutama sarana dan prasarana pendukung aktivitas warga.</h3>
                                </div>
                                <ul class="forDesktop">
                                    <li><img src="{{asset('images/home/product.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/home/news.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                            <div class="section__second--text">
                                <div>
                                    <p class="mb-5">PRODUCT</p>
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ligula aliquet, euismod tortor at, dictum augue. Sed a blandit urna, ac pellentesque urna. Curabitur hendrerit a lacus vitae vulputate. </h3>
                                </div>
                                <ul class="forDesktop">
                                    <li><img src="{{asset('images/home/news.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/home/contact.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                            <div class="section__second--text">
                                <div>
                                    <p class="mb-5">NEWS/ ARTICLES</p>
                                    <h3>Informasi dan artikel terbaru seputar Bintaro Jaya.</h3>
                                </div>
                                <ul class="forDesktop">
                                    <li><img src="{{asset('images/home/contact.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                            <div class="section__second--text">
                                <div>
                                    <p class="mb-5">CONTACT US</p>
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ligula aliquet, euismod tortor at, dictum augue. Sed a blandit urna, ac pellentesque urna. Curabitur hendrerit a lacus vitae vulputate. </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-3">
                        <div class="dots_custom dts-1"></div>
                        <div class="about-slider-nav">
                            <div class="slider-learn p-0">
                                <div class="learn">
                                    <a href="{{route('about')}}">Learn More</a>
                                </div>
                                <div class="learn">
                                    <a href="{{route('experiences')}}">Learn More</a>
                                </div>
                                <div class="learn">
                                    <a href="{{route('partners')}}">Learn More</a>
                                </div>
                                <div class="learn">
                                    <a href="{{route('products')}}">Learn More</a>
                                </div>
                                <div class="learn">
                                    <a href="{{route('news')}}">Learn More</a>
                                </div>
                                <div class="learn">
                                    <a href="{{route('contact')}}">Learn More</a>
                                </div>
                            </div>
                            <ul class="arrow">
                                <li class="about-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                <li class="about-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
@section('script')
    <script>
        $(document).ready(function (params) {
            let item_percentage1 = 100 / 6

            for (let i = 0; i < 6; i++) {
                $('.dts-1').append(`<div class="dots_custom-item dts-1-item" style="width:${item_percentage1}%"></div>`)
            }

            $(".about-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                let idx = currentSlide == undefined ? 0 : currentSlide
                $('.dts-1-item').each(function (params) {
                    if($(this).index() === idx){
                        $(this).addClass('active')
                        $('.dts-1-item').not($(this)).removeClass('active');
                    }
                })
            });

            $('.about-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                dots:false,
                prevArrow: $('.about-prev'),
                nextArrow: $('.about-next'),
                fade: true,
                asNavFor: $('.slider-learn, .slider-about-desc')
            });

            $('.slider-learn').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
                fade: true,
            })
            $('.slider-about-desc').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
                fade: true,
                adaptiveHeight:true
            })
        })
    </script>
@endsection