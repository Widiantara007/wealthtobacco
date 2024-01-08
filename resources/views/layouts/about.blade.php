@extends('main')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>{{__('Tentang Kami')}}</h2>
                        </div>
                        <div class="col-12">
                            <a href="">{{__('Beranda')}}</a>
                            <a href="">{{__('Tentang')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        {{-- <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div> --}}
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-center">
                                <p>{{__('Tentang Wealth Tobacco')}}</p>
                                <h2>{{__('Keisengan Yang Membawa Berkat')}}</h2>
                            </div>
                            <div class="about-text">
                               <p>
                                {{__('Wealth Tobacco adalah produsen tembakau & rokok di Malang - Jawa Timur. Berdiri sejak 2018 dan berpengalaman selama lebih dari satu dekade dalam mengolah tembakau menjadi produk jadi & rokok.')}} 
                                </p> 
                                <p>
                                    {{__('Kisah perusahaan tembakau Malang ini bermula dari keisengan sang perintis untuk menciptakan pengalaman merokok yang sensasional. Keisengan ini kemudian menjadi kecintaan saat ia mulai penasaran dengan racikanya sendiri dan membuatnya ingin terus meracik tembakau hingga pengalaman tersebut membawanya ahli dalam meracik tembakau yang nikmat dan tak tertandingi.')}}
                                </p>
                               <p>
                                {{__('Racikan rahasianya ternyata sangat direspon oleh pasar, utamanya ketika pandemi Covid-19, permintaan produk racikanya malah meledak sampai di seluruh Indonesia. Tak hanya di dalam Negeri, produsen tembakau Malang ini kini melayani permintaan dari luar negeri. Dengan komitmenya yang selalu ingin berkembang dan menembus batas kemustahilan, Wealth Tobacco akan menjadi perusahaan pengolah tembakau terbaik khususnya di kota Malang.')}}
                               </p>
                               <p>
                                {{__('Wealth Tobacco bukan sekadar nama, tetapi sebuah janji kemakmuran bagi semua yang terlibat dalam perjalanan kami. Dari petani tembakau yang berdedikasi hingga pemasok yang dapat diandalkan, distributor yang setia, dan seluruh keluarga Wealth Tobacco, kami berkomitmen untuk memastikan bahwa keberhasilan dirasakan oleh semua pihak, termasuk mitra bisnis dan pelanggan kami yang dihargai. Kami melampaui sekadar menghasilkan tembakau premium; ini adalah tentang membentuk komunitas di mana keberhasilan bersama menjadi landasan utama.')}}
                               
                               </p>
                               

                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn" href="">{{__('Lebih Lanjut')}}</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- About End -->
            
            
            <!-- Fact Start -->
    <div class="fact">
        <div class="container-fluid">
            <div class="row counters">
                <div class="col-md-6 fact-left wow slideInLeft">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-crane"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">6500</h2>
                                <p>{{__('Produksi per-Tahun')}}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">99</h2>
                                <p>{{__('Mitra')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fact-right wow slideInRight">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">31</h2>
                                <p>{{__('Racikan Berkualitas')}}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="fa-solid fa-earth-asia"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">25</h2>
                                <p>{{__('Provinsi')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->
            
            
           

@endsection