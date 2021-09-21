@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/banner-partners.jpg')}})">
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
            {{-- <div class="caption"><h1>PARTNERS</h1></div> --}}
        </div>
    </header>
@endsection
@section('main')
    <main page="partner">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                        <div class="text_wrapper">
                            <h2>Fasilitas penunjang yang dekat dengan hunian menjadi poin penting sebuah pengembangan kawasan, terutama sarana dan prasarana pendukung aktivitas warga.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-9">
                        <div class="section__second-left">
                            <div class="partner1-slider">
                                <img src="{{asset('images/partners/offices/Body Shop.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/offices/hero.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/offices/Indy Office Tower.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/offices/Titan Center.jpg')}}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="position-relative h-100">
                            <div class="box_text box_text-right">
                                <div>
                                    <h3>Offices</h3>
                                    <p>Pusat Kawasan Niaga atau CBD Bintaro Jaya telah menjadi area perkantoran sebagai <i>head office</i> atau <i>back office</i> beberapa perusahaan terkemuka nasional.</p>
                                </div>
                                <div>
                                    <div class="dots_custom dts-partner1 w-100 mb-4"></div>
                                    <ul class="arrow text-end">
                                        <li class="partner1-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                        <li class="partner1-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-12 col-lg-3 order-2 order-lg-1">
                        <div class="position-relative h-100">
                            <div class="box_text box_text-left">
                                <div>
                                    <h3>Financial & Banking</h3>
                                    <p>Keberadaan kantor-kantor cabang dari perusahaan perbankan semakin memudahkan transaksi perbankan Anda. </p>
                                </div>
                                <div>
                                    <div class="dots_custom dts-partner2 w-100 mb-4"></div>
                                    <ul class="arrow text-end">
                                        <li class="partner2-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                        <li class="partner2-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 order-1 order-lg-2">
                        <div class="section__second-right">
                            <img src="{{asset('images/pict10.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-12 col-lg-9">
                        <div class="section__second-left">
                            <div class="partner3-slider">
                                <img src="{{asset('images/partners/automotive/automotive1.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/automotive/automotive2.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/automotive/automotive3.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/automotive/automotive4.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/automotive/Automotive5.jpg')}}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="position-relative h-100">
                            <div class="box_text box_text-right">
                                <div>
                                    <h3>Automotive</h3>
                                    <p><i>Dealer</i>, <i>showroom</i>, dan bengkel beberapa perusahaan otomotif juga telah mengoperasikan outletnya di kawasan Bintaro Jaya. </p>
                                </div>
                                <div>
                                    <div class="dots_custom dts-partner3 w-100 mb-4"></div>
                                    <ul class="arrow text-end">
                                        <li class="partner3-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                        <li class="partner3-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-12 col-lg-3 order-2 order-lg-1">
                        <div class="position-relative h-100">
                            <div class="box_text box_text-left">
                                <div>
                                    <h3>Tellecommunication</h3>
                                    <p>Layanan telekomunikasi Anda hanya selangkah dari jangkauan.</p>
                                </div>
                                <div>
                                    <div class="dots_custom dts-partner4 w-100 mb-4"></div>
                                    <ul class="arrow text-end">
                                        <li class="partner4-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                        <li class="partner4-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 order-1 order-lg-2">
                        <div class="section__second-right">
                            <img src="{{asset('images/pict4.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-12 col-lg-9">
                        <div class="section__second-left">
                            <div class="partner5-slider">
                                <img src="{{asset('images/partners/automotive/shell.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/automotive/bp.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/automotive/vivo.jpg')}}" width="100%" alt="">
                                <img src="{{asset('images/partners/automotive/pertamina.jpg')}}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="position-relative h-100">
                            <div class="box_text box_text-right">
                                <div>
                                    <h3>Gas Station</h3>
                                    <p>Suplai bahan bakar kendaraan Anda tersedia di berbagai stasiun pengisian bahan bakar yang tersebar di setiap sudut kawasan.</p>
                                </div>
                                <div>
                                    <div class="dots_custom dts-partner5 w-100 mb-4"></div>
                                    <ul class="arrow text-end">
                                        <li class="partner5-prev"><img src="{{asset('images/left-arrow.png')}}" width="25px" alt="arrow"></li>
                                        <li class="partner5-next"><img src="{{asset('images/right-arrow.png')}}" width="25px" alt="arrow"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection