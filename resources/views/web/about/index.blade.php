@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/banner-aboutus.jpg')}})">
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
            {{-- <div class="caption"><h1>ABOUT US</h1></div> --}}
        </div>
    </header>
@endsection
@section('main')
    <main page="about">
        <section class="section__text">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                        <div class="text_wrapper">
                            <h2>Bintaro Jaya adalah kawasan mandiri berskala kota yang dikembangkan sejak tahun 1979 oleh Jaya Property yang berlokasi di Selatan Jakarta. Memiliki 2 (dua) akses jalan tol langsung yang menghubungkan Jakarta Selatan dan Jakarta Barat dan ke bandara Internasional Soekarno-Hatta. Selain itu, Bintaro Jaya juga terhubung dengan 3 (tiga) stasiun commuter line yaitu stasiun Pondok Ranji, stasiun Jurang Mangu dan stasiun Sudimara.</h2>
                            <br/>
                            <h2>
                                Bintaro Jaya, mengembangkan hunian landed residential dan highrise residential dengan konsep TOD (transit oriented development) dengan lingkungan yang hijau dan fasilitas yang lengkap.
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="img_wrapper">
                            <img src="{{asset('images/corporate_value.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="text_wrapper">
                            <h2>Corporate Value</h2>
                            <p>PT Jaya Real Property, Tbk. (“Perseroan”) didirikan pada tahun 1979 dengan nama PT Bintaro Raya berdasarkan Undang-Undang Penanaman Modal Dalam Negeri pada tanggal 25 Mei 1979 dengan akta No. 36 yang dibuat di hadapan Hobropoerwanto, SH, pada waktu itu notaris di Jakarta, yang kemudian diubah dengan akta No. 14 dari notaris yang sama pada tanggal 6 Desember 1979. Akta pendirian tersebut telah disahkan oleh Menteri Kehakiman Republik Indonesia dalam Surat Keputusan No. Y.A. 5/498/24 tanggal 22 Desember 1979 dan diumumkan dalam Berita Negara Republik Indonesia No. 23 tanggal 18 Maret 1980, Tambahan Berita Negara Republik Indonesia No. 148. Nama kemudian diubah menjadi PT Jaya Real Property berdasarkan Akta No. 133 pada tanggal 14 Mei 1992 di hadapan Sutjipto, notaris di Jakarta. Saham Perseroan pertama kali ditawarkan kepada masyarakat pada tahun 1994 dan tercatat di Bursa Efek Indonesia sejak tanggal 29 Juni 1994.</p>
                            <div class="learn">
                                <a href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-4">
                        <div class="section__second--text">
                            <div>
                                <h2>Our Living</h2>
                                <p>Nikmati mudahnya hidup modern dan nyaman dari segala sisi di Bintaro Jaya. Hunian premium terdepan di Selatan Jakarta, dengan fasilitas lengkap dan <i>transit-oriented development</i> yang mengutamakan kemudahan akses. Mulai dari area komersial, pusat perbelanjaan, hingga kenyamanan hunian, Bintaro Jaya hadir untuk melengkapi segala momen dan gaya hidup Anda dan keluarga.</p>
                                <div class="learn">
                                    <a href="{{route('living')}}">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <img src="{{asset('images/360_living.jpg')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="section__third">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="img_wrapper">
                            <img src="{{asset('images/access.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="text_wrapper">
                            <h2>Access</h2>
                            <p>Berlokasi di selatan Jakarta, Bintaro Jaya memiliki akses yang mudah dicapai dan integrasi antarmoda transportasi. Terhubung langsung dengan jalan tol Serpong-Pondok Indah dan JORR 2, tiga stasiun <i>commuter line</i>, Royal Trans, serta Intrans Bintaro Jaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection