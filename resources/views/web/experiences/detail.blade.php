@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/experiences/')}}/{{$banner[0]->slug}}/{{$banner[0]->image_banner}})">
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
            {{-- <div class="caption"><h1 style="text-transform: uppercase">{{$banner[0]->name}}</h1></div> --}}
        </div>
    </header>
@endsection
@section('main')
    <main page="experiences-detail">
        <section class="section__first">
            <div class="container-fluid g-0">
                @foreach ($experiences as $item)
                    @if ($item->id % 2 != 0)
                        <div class="row g-0 section__first_left">
                            <div class="col-12 col-lg-5">
                                <div class="section__first_left-content">
                                    <div>
                                        <h3>{{$item->title}}</h3>
                                        <p>{!!$item->detail_desc!!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="section__first_left-img expDetail-slider1">
                                    <img src="{{asset('images/experiences')}}/{{$item->slug}}/{{$item->img_detail}}" width="100%" alt="">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row g-0 section__first_right">
                            <div class="col-12 col-lg-7">
                                <div class="section__first_right-img expDetail-slider2">
                                    <img src="{{asset('images/experiences')}}/{{$item->slug}}/{{$item->img_detail}}" width="100%" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="section__first_right-content">
                                    <div>
                                        <h3>{{$item->title}}</h3>
                                        <p>{!!$item->detail_desc!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </main>
@endsection