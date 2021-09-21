@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/360_living.jpg')}})">
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
            {{-- <div class="caption"><h1>360 LIVING</h1></div> --}}
        </div>
    </header>
@endsection
@section('main')
    <main page="living">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="text-center">
                            <h2 class="mb-5r">Nikmati mudahnya hidup modern dan nyaman dari segala sisi di Bintaro Jaya. Hunian premium terdepan di Selatan Jakarta, dengan fasilitas lengkap dan <i>transit-oriented development</i> yang mengutamakan kemudahan akses. Mulai dari area komersial, pusat perbelanjaan, hingga kenyamanan hunian, Bintaro Jaya hadir untuk melengkapi segala momen dan gaya hidup Anda dan keluarga.</h2>
                            <img src="{{asset('images/home/42thn.png')}}" alt="42 tahun bintaro" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0 mb-5r">
                    <div class="col-12 col-lg-5">
                        <div class="living__item">
                            <div class="living__item-img">
                                <img src="{{asset('images/comfort.jpeg')}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="living__item-title"><p><strong class="text-black"><span class="text-blue">Comfort</span> – Landed Residential / High Rise Development</strong></p></div>
                            <div class="living__item-content">
                                <p>Hidup nyaman di Bintaro Jaya berkat banyaknya pilihan produk <i>landed residential</i> dan <i>high rise residential</i>. Bintaro Jaya siap mendukung kebutuhan di setiap momen kehidupan Anda. Tak hanya untuk tempat tinggal dan rekreasi, produk-produk properti  Bintaro Jaya juga ideal untuk investasi hari depan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="living__item">
                            <div class="living__item-img">
                                <img src="{{asset('images/community.jpeg')}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="living__item-title"><p><strong class="text-black"><span class="text-blue">Community </span> – Urban Open Space / Public Facilities</strong></p></div>
                            <div class="living__item-content">
                                <p>Untuk Anda yang gemar berkegiatan di luar ruangan, Bintaro mengedepankan area lingkungan yang hijau dalam bentuk <i>urban open space</i> dan fasilitas publik. Semuanya dirancang dengan sangat nyaman, asri, dan modern.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-10r">
                    <div class="col-12 col-lg-2"></div>
                    <div class="col-12 col-lg-5">
                        <div class="living__item">
                            <div class="living__item-img">
                                <img src="{{asset('images/convenient.jpeg')}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="living__item-title"><p><strong class="text-black"><span class="text-blue">Convenient</span> – Shopping &amp; Entertainment Centers</strong></p></div>
                            <div class="living__item-content">
                                <p>Di samping hunian yang nyaman, area terbuka yang asri dan hijau, Bintaro Jaya juga memiliki pusat perbelanjaan dan hiburan untuk memanjakan semua kebutuhan berbelanja Anda dan keluarga.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="living__item">
                            <div class="living__item-img">
                                <img src="{{asset('images/complete.jpeg')}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="living__item-title"><p><strong class="text-black"><span class="text-blue">Complete</span> – Mixed-Used Development</strong></p></div>
                            <div class="living__item-content">
                                <p>Bintaro Jaya mengembangkan kawasan <i>mixed-use development</i> yang terhubung dengan konsep <i>transit-oriented development</i>. Jalani serunya beraktivitas di Bintaro Jaya yang dilengkapi sarana dan prasarana dengan kualitas terbaik.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-12 col-lg-2"></div>
                    <div class="col-12 col-lg-5">
                        <div class="living__item">
                            <div class="living__item-img">
                                <img src="{{asset('images/connection.jpeg')}}" width="100%" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="living__item2">
                            <div class="living__item-title"><p><strong class="text-black"><span class="text-blue">Connection</span> – TOD / Commercial District</strong></p></div>
                            <div class="living__item-content">
                                <p>Lokasi yang strategis dan penataan kawasan yang terintegrasi, memudahkan aksesibilitas dan mobilitas. Kawasan Bintaro Jaya terhubung dengan jalan tol, jalur <i>commuter line</i>, dan <i>feeder bus.</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection