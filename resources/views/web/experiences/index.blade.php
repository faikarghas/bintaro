@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/banner-experience.jpg')}})">
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
            {{-- <div class="caption"><h1>EXPERIENCES</h1></div> --}}
        </div>
    </header>
@endsection
@section('main')
    <main page="experiences">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-12">
                        <div class="text_wrapper">
                            <h2>Jalani aktivitas dan rasakan pengalaman tanpa batas. Nikmati segala fasilitas yang ada, untuk tumbuh, belajar, bermain, bekerja, belanja, dan bercengkerama.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__second">
            <div class="container-fluid g-0">

                @foreach ($experiences_category as $item)
                    @if ($item->order % 2 != 0)
                        <div class="row g-0">
                            <div class="col-12 col-lg-9">
                                <div class="section__second-left">
                                    <img src="{{asset('images/experiences')}}/{{$item->image}}" width="100%" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="position-relative h-100">
                                    <div class="box_text box_text-right">
                                        <div>
                                            <h3>{{$item->name}}</h3>
                                            <p>{{$item->description}}</p>
                                        </div>
                                        <div class="learn">
                                            <a href="{{route('experiences.slug',$item->slug)}}">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row g-0">
                            <div class="col-12 col-lg-3 order-2 order-lg-1">
                                <div class="position-relative h-100">
                                    <div class="box_text box_text-left">
                                        <div>
                                            <h3>{{$item->name}}</h3>
                                            <p>{{$item->description}}</p>
                                        </div>
                                        <div class="learn">
                                            <a href="{{route('experiences.slug',$item->slug)}}">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-9 order-1 order-lg-2">
                                <div class="section__second-right">
                                    <img src="{{asset('images/experiences')}}/{{$item->image}}" width="100%" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </section>
    </main>
@endsection