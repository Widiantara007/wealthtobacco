@extends('main')
@section('content')
<!-- Page Header Start -->
<div class="page-header " style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('DISTRIBUTOR')}}</h2>
            </div>
            <div class="col-12">
                <a href="">{{__('Beranda')}}</a>
                <a href="">{{__('Distributor')}}</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="section-header text-center">
                <p>{{__('Dapatkan Produk')}}</p>
                <h2>{{__('Distributor Kami')}}</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion-1">
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    PT. Galaxy Trade Indonesia
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Alamat')}} : Jl. Karya Timur No.35, Purwantoro, Belimbing - Malang
                                </div>
                                <div class="card-body">
                                    {{__('Telepon')}} : +6287753851544
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    PT. A
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Alamat')}} : Jl.XXXX
                                </div>
                                <div class="card-body">
                                    {{__('Telepon')}} : +62XXX
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    PT.B
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Alamat')}} : Jl.XXXX
                                </div>
                                <div class="card-body">
                                    {{__('Telepon')}} : +62XXX
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                    PT.C
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Alamat')}} : Jl.XXXX
                                </div>
                                <div class="card-body">
                                    {{__('Telepon')}} : +62XXX
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                    PT.D
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Alamat')}} : Jl.XXXX
                                </div>
                                <div class="card-body">
                                    {{__('Telepon')}} : +62XXX
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- FAQs End -->
@endsection