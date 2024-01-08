@extends('main')
@section('content')

<!-- Page Header Start -->
<div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('KONTAK KAMI')}}</h2>
            </div>
            <div class="col-12">
                <a href="">{{__('Beranda')}}</a>
                <a href="">{{__('Contact')}}</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact wow fadeInUp">
    <div class="container">
        <div class="section-header text-center">
            <p>Wealth Tobacco</p>
            <h2>{{__('Untuk info Lebih Lanjut')}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="flaticon-address"></i>
                        <div class="contact-text">
                            <h2>{{__('Alamat')}}</h2>
                            <p>Jl. Karya Timur No.35, Purwantoro, Belimbing - Malang</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-call"></i>
                        <div class="contact-text">
                            <h2>{{__('Telepon')}}</h2>
                            <p>+6287753851544</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-send-mail"></i>
                        <div class="contact-text">
                            <h2>Email</h2>
                            <p>wealthtobacco@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg) center / cover no-repeat; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div class="contact-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2>{{__('Hubungi Kami')}}</h2>
                            </div>
                            {{-- <div class="col-12">
                                <a href="">Home</a>
                                <a href="">Contact Us</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="centered-button text-center align-items-center">
                    <a class="btn" href="https://api.whatsapp.com/send?phone=+6287753851544
                    &text=Halo!%20I Wealth%20Tobacco.%20Saya%20sangat%20ingin%20mencoba%20produk Anda. Dapatkah Anda menghubungi Saya?" target="_blank" rel="noopener noreferrer" class="btn btn-dark rounded-pill py-2 px-4 m-2">{{__('Hubungi Sekarang')}}</a>
                </div>
            </div>
 
        </div>
    </div>
</div>
<!-- Contact End -->
    
@endsection