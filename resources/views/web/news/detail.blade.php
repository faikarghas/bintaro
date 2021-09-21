@extends('components/layouts.index')
@section('custom-css')
    <style>
        header .caption{
            padding: 0 25rem;
            text-align:center;
        }
    </style>
@endsection
@section('header')
    <header>
        <img src="{{asset('images')}}/{{$newsDetail[0]->news_image}}" class="news_banner"/>
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
            <div class="caption"><h1>INI CARANYA MEMBELI RUMAH DI SAAT PANDEMI 2021</h1></div>
        </div>
    </header>
@endsection
@section('main')
    <main page="news-detail">
        <section class="section__first">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{-- <div class="section__first-img">
                            <img src="{{asset('images/news-image2.jpg')}}" width="100%" />
                        </div> --}}
                        <div class="section__first-shortDesc">
                            {!!$newsDetail[0]->news_singkat!!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            {{-- <p>Baca juga: <a><strong>Ini Kondisi Investasi Properti saat PPKM</strong></a></p>
                            <br/>
                            <p>Yuk, simak beberapa tips berikut ini untuk membeli rumah di saat pandemic ini.</p>
                            <br/>
                            <p class="mb-0"><strong>Kalkulasikan keuangan</strong></p>
                            <p>Hal pertama yang harus dilakukah ialah mengkalkulasikan keuangan Anda mulai dari tabungan, pemasukan, hingga pengeluaran. Kalkulasikan untuk DP rumah dan angsuran tiap bulannya agar proses KPR bisa berjalan dengan lancer. Hal ini harus diperhitungkan secara matang sebelum Anda mengajukan untuk membeli rumah.</p>
                            <br/>
                            <p class="mb-0"><strong>Survey rumah</strong></p>
                            <p>Setelah keuangan dirasa aman, Anda bisa melakukan survey ke rumah yang hendak Anda pilih. Pastikan Anda memperhatikan lokasi strategis, akses transportasi yang mudah, dan fasilitas yang lengkap. Anda juga bisa mempertimbangkan luas tanah dan bangunan yang masih cukup luas untuk dapat Anda perluas atau renovasi di kemudian hari.</p>
                            <br/>
                            <p class="mb-0"><strong>Jeli dan teliti sebelum transaksi</strong></p>
                            <p>Cobalah untuk aktif bertanya dan membaca setiap rincian dari klausul pembelian. Jangan sampai Anda melewatkan hal-hal yang tidak dimengerti dan malah membawa masalah baru di kemudian hari. Begitu pula saat memilih bank untuk KPR, pilihlah dengan teliti ya.</p>
                            <br/>
                            <p class="mb-0"><strong>Harga rumah terjangkau</strong></p>
                            <p>Salah satu keuntungan Anda membeli rumah di masa pandemic ini adalah banyaknya program dan promo yang ditawarkan sehingga Anda bisa membeli rumah dengan harga yang lebih terjangkau. Salah satu contohnya, Jaya Real Property sebagai developer terpercaya menawarkah program Buy Now Pay Next Year untuk pembelian rumah di Bintaro Jaya. Anda bisa membayar 5% dan sisanya tahun depan! Dapatkan juga free AC dan water heater.</p> --}}
                            {!!$newsDetail[0]->news_isi!!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


