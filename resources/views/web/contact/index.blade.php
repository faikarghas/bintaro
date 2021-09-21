@extends('components/layouts.index')
@section('header')
    <header style="background-image: url({{asset('images/cover5.jpg')}})">
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
            {{-- <div class="caption"><h1>CONTACT US</h1></div> --}}
        </div>
    </header>
@endsection
@section('main')
    <main page="contact">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <h5>MAIL US</h5>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="desc">
                            {{-- <h3>Lorem Ipsum Dolor Sit Amet</h3> --}}
                            <p>Silakan hubungi kami dengan mengisi form kontak berikut atau email kami langsung melalui:</p>

                            <ul><li><span><img src="{{asset('/images/mail.png')}}" alt=""></span><a href="">bintarojaya@gmail.com</a></li></ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form_wrapper">
                            <form action="/bintaro-new/post-contact" method="post" accept-charset="utf-8">
                                {{ csrf_field() }}
                                <div class="container-fluid g-0">
                                    <div class="row g-0">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <select class="form-select" name="perihal" aria-label="Default select example">
                                                    <option selected>Perihal</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-5 me-4 form-item">
                                                <label for="nama_depan" class="form-label">Nama Depan</label>
                                                <input type="text" class="form-control " id="nama_depan" name="nama_depan" aria-describedby="nama_depan">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-5 ms-4 form-item">
                                                <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" aria-describedby="nama_belakang">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-5 form-item">
                                                <label for="email" class="form-label">Alamat Email</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-5 form-item-textarea">
                                                <label for="pesan" class="form-label">Pesan</label>
                                                <textarea name="pesan" id="pesan" name="pesan" class="form-control" cols="5" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 text-end btn-action">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input d-none" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">+ LAMPIRAN</label>
                                            </div>
                                            <button type="submit" class="btn btn-custom-binjay">KIRIM</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


