@extends('main')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>{{__('Fermentasi Tembakau')}}
                            </h2>
                        </div>
                        <div class="col-12">
                            <a href="">{{__('Beranda')}}</a>
                            <a href="">Blog</a>
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
                            {{-- <div class="section-header text-center">
                                <p>B1</p>
                                <h2>Keisengan Yang Membawa Berkat</h2>
                            </div> --}}
                            <div class="about-text">

                               <p>
                                {{__('Untuk menciptakan produk tembakau atau rokok premium tidaklah mudah. Sederetan proses harus dilalui dengan serius. Begitu juga fermentasi. Seperti produk cokelat, kopi, alkohol, atau premium lain tembakau juga harus mengalami proses fermentasi. Setelah fermentasi tembakau akan diperlakukan dengan berbagai cara yang disebut dengan curing. Apa saja jenis-jenis curing? Mari dalami lebih lanjut.')}}</p> 
                                
                                <h5>1. {{__('Flue-Cured (Pengeringan dengan Saluran Panas)')}}:
                                </h5>
                               <p>
                               {{__('Daun tembakau dikeringkan dengan menggunakan udara panas yang mengalir melalui saluran khusus. Hasilnya adalah tembakau yang ringan, memiliki rasa manis, dan biasanya digunakan dalam campuran rokok kretek atau rokok Virginia.')}}</p> 

                                <h5>2. {{__('Burley:')}}
                                </h5>
                               <p>
                                {{__('Dikeringkan dengan metode air-curing atau dark air-curing. Burley dikenal memiliki daun yang lebih besar dan lebih tebal. Tembakau Burley memiliki rasa yang lebih netral, kurang manis, dan kadang-kadang memiliki rasa coklat atau kacang.')}}
                                </p> 
                                
                                <h5>
                                    3. {{__('Oriental:')}}
                                </h5>
                               <p>
                                {{__('Dikeringkan dengan metode udara terbuka atau natural air-curing. Tembakau Oriental berasal dari daerah Timur Tengah dan dikenal dengan rasa yang kompleks, aromatik, dan kadang-kadang sedikit pedas. Digunakan dalam pembuatan rokok kretek dan tembakau pipa.')}}</p> 
                                
                                <H5>
                                    4. {{__('Penggulungan dan Pemotongan:')}}
                                </H5>
                           <p> 
                            {{__('Daun tembakau yang telah dikeringkan diroll atau digulung sesuai dengan jenis produk tembakau yang akan dihasilkan. Proses ini melibatkan pemilihan dan penggulungan daun-daun tembakau yang sesuai untuk membentuk rokok atau cerutu.')}} 

                        </p>
                               <h5>5. {{__('Pengeringan Matahari:')}}

                                </h5>
                           <p> 
                            {{__('Daun tembakau dikeringkan di bawah sinar matahari. Tembakau Sun-Cured cenderung memiliki rasa yang kuat, dan kadang-kadang memiliki rasa manis. Jenis ini sering digunakan dalam tembakau pipa dan cerutu.')}}


                        </p>
                       
                               

                            </div>
                        </div>
                        {{-- <div class="col-12 text-center">
                            <a class="btn" href="">Learn More</a>
                        </div>
                         --}}
                    </div>
                </div>
            </div>
            <!-- About End -->
            
            
            <!-- Fact Start -->
            {{-- <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">109</h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">485</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Fact End -->
            
            
           

@endsection