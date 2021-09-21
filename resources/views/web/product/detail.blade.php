@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/products')}}/{{$detailProduct['banner']}})">
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
            <div class="caption"><h1 class="text-uppercase">{{$detailProduct['title']}}</h1></div>
        </div>
    </header>
@endsection
@section('main')
    <main page="category-detail">
        <div class="section_download_brosur">
            <div class="box_download">
                <div class="text-center">
                    <p>Need more info?</p>
                    <a href="">Download E-Brochure</a>
                </div>
            </div>
        </div>
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                       <div class="category__detailWrapper category-detail-slider">
                           @foreach ($detailProduct['cluster'] as $key => $item)
                               @if ($key == 0)
                                    <div class="category__detailWrapper--item active" id="pills-{{$item['tab']}}1" data-tab="pills-{{$item['tab']}}">
                                @else
                                    <div class="category__detailWrapper--item" id="pills-{{$item['tab']}}1" data-tab="pills-{{$item['tab']}}">
                                @endif
                                    <img src="{{asset('images/products')}}/{{$item['image']}}" width="100%" alt="">
                                    <p>{{$item['title']}}</p>
                                </div>
                           @endforeach
                            <div class="category__detailWrapper--item">
                                {{-- <img src="{{asset('images/pict21.jpg')}}" width="100%" alt=""> --}}
                            </div>
                       </div>
                       <div class="slider-action">
                        <div class="dots_custom dts-categoryDetailProduct"></div>
                        <div class="space-beetwen-horizontal slider-action-sc">
                            <p>{{$detailProduct['sliderName']}}</p>
                            <ul class="arrow">
                                <li class="category-prev"><img src="{{asset('images/svg/black-arrow-left.svg')}}" width="25px" alt="arrow"></li>
                                <li class="category-next"><img src="{{asset('images/svg/black-arrow-right.svg')}}" width="25px" alt="arrow"></li>
                            </ul>
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
                        <div class="tab-content" id="pills-tabContent">
                            @foreach ($detailProduct['cluster'] as $key => $item)
                                @if ($key == 0)
                                    <div class="tab-pane fade show active" id="pills-{{$item['tab']}}" role="tabpanel" aria-labelledby="{{$item['tab']}}-home-tab">
                                @else
                                    <div class="tab-pane fade show" id="pills-{{$item['tab']}}" role="tabpanel" aria-labelledby="{{$item['tab']}}-home-tab">
                                @endif
                                        <div class="tab__section_first">
                                            <img src="{{asset('images/products')}}/{{$item['image1']}}" width="100%" alt="">
                                            <h4>{{$item['title1']}}</h4>
                                        </div>
                                        <div class="tab__section_second">
                                            <div class="container-fluid g-0">
                                                <div class="row g-0">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="tab__section_second-dual">
                                                            <img src="{{asset('images/products')}}/{{$item['image2']}}" width="100%" alt="">
                                                            <p>{{$item['desc1']}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="tab__section_second-dual">
                                                            <img src="{{asset('images/products')}}/{{$item['image3']}}" width="100%" alt="">
                                                            <p>{{$item['desc2']}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($item['image4'])
                                            <div class="tab__section_first item2">
                                                <img src="{{asset('images/products')}}/{{$item['image4']}}" width="100%" alt="">
                                                <p>{{$item['desc3']}}</p>
                                            </div>
                                        @endif
                                        <div class="tab__section_third">
                                            <div class="container-fluid g-0">
                                                <div class="row g-0">
                                                    <div class="col-12 col-lg-4">
                                                        <div class="space-beetwen-vertical">
                                                            <h4>{{$item['titleBrosur']}}</h4>
                                                            <div>
                                                                @if ($item['titleBrosur2'])
                                                                    <h5>{{$item['titleBrosur2']}}</h5>
                                                                @endif
                                                                @if ($item['title'] == 'Kebayoran Square')
                                                                    <ul class="listTab">
                                                                        <li>Tipe Sudut 3 LT</li>
                                                                        <li style="color:black;">Tipe Standart 3 LT</li>
                                                                        <li style="color:black;">Tipe Standart 4 LT</li>
                                                                    </ul>
                                                                @endif
                                                                <h4>{!!$item['descBrosur']!!}</h4>
                                                            </div>
                                                            <div class="learn lr-download">
                                                                <a href="">Download E-Brochure</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-8">
                                                        <div class="product-detail-slider">
                                                            <img src="{{asset('images/products')}}/{{$item['imageBrosur'][0]['image']}}" width="100%" alt="">
                                                        </div>
                                                        <div class="slider-action">
                                                            <div class="dots_custom dts-productDetailProduct"></div>
                                                            <div class="space-beetwen-horizontal slider-action-sc">
                                                                <ul class="arrow">
                                                                    <li class="productDetail-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                                                    <li class="productDetail-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {

            var countProduct = <?php echo json_encode($detailProduct); ?>;
            let item_percentage3 = 100 / 2

            console.log(countProduct.cluster.length);

            for (let i = 0; i < 2; i++) {
                $('.dts-categoryDetailProduct').append(`<div class="dots_custom-item dts-categoryDetailProduct-item" style="width:${item_percentage3}%"></div>`)
            }

            $(".category-detail-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                let idx = currentSlide == undefined ? 0 : currentSlide
                $('.dts-categoryDetailProduct-item').each(function (params) {
                    if($(this).index() === idx){
                        $(this).addClass('active')
                        $('.dts-categoryDetailProduct-item').not($(this)).removeClass('active');
                    }
                })
            });

            $(`.category-detail-slider`).slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                dots:false,
                variableWidth:true,
                prevArrow: $('.category-prev'),
                nextArrow: $('.category-next'),
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

            $('.category__detailWrapper--item').each(function (params) {
                $(this).on('click',function (params) {

                    let idTab = $(this).data('tab')

                    $(`#${idTab}`).addClass('show')
                    $(`#${idTab}`).addClass('active')
                    $('.tab-pane').not(`#${idTab}`).removeClass('active');
                    $('.tab-pane').not(`#${idTab}`).removeClass('show');

                    $(this).addClass('active')
                    $('.category__detailWrapper--item').not(this).removeClass('active')
                })
            })

            let item_percentage4 = 100 / 1

            for (let i = 0; i < 1; i++) {
                $('.dts-productDetailProduct').append(`<div class="dots_custom-item dts-productDetailProduct-item" style="width:${item_percentage4}%"></div>`)
            }

            $(".product-detail-slider").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                let idx = currentSlide == undefined ? 0 : currentSlide
                $('.dts-productDetailProduct-item').each(function (params) {
                    if($(this).index() === idx){
                        $(this).addClass('active')
                        $('.dts-productDetailProduct-item').not($(this)).removeClass('active');
                    }
                })
            });

            $(`.product-detail-slider`).slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                dots:false,
                prevArrow: $('.productDetail-prev'),
                nextArrow: $('.productDetail-next')
            });
        });
    </script>
@endsection