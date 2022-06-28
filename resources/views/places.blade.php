@extends('header')
@section('content')
<section class="our_gallery section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Our gallery</h2>
                        <p>Manjakan mata dengan sejumlah foto tempat wisata yang kami kumpulkan khusus untuk anda.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        <div class="card">
                            <a href="{{asset('konten/gk/gk1.jpg')}}" class="gallery_img">
                               <img src="{{asset('konten/goa/gk1.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{asset('konten/kl/kl1.jpg')}}" class="gallery_img">
                                <img src="{{asset('konten/kl/kl1.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{asset('konten/ls/ls1.jpg')}}" class="gallery_img">
                                <img src="{{asset('konten/ls/ls1.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{asset('konten/mg/mg1.jpg')}}" class="gallery_img">
                                <img src="{{asset('konten/mg/mg1.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{asset('konten/mkc/mkc.jpg')}}" class="gallery_img">
                                <img src="{{asset('konten/mkc/mkc.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{asset('konten/mr/mr1.jpg')}}" class="gallery_img">
                                <img src="{{asset('konten/mr/mr1.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{asset('konten/pm/pm1.jpg')}}" class="gallery_img">
                                <img src="{{asset('konten/pm/pm1.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                        <div class="card">
                            <a href="{{asset('konten/spk/spk1.jpg')}}" class="gallery_img">
                                <img src="{{asset('konten/spk/spk1.jpg')}}" class="card-img-top" alt="">
                            </a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection