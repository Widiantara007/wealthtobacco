@extends('main')
@section('content')
    @include('components.carousel')
     <!-- Feature Start-->
     <div class="feature wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <div class="feature-text">
                            <h3>{{__('Blending Berkualitas')}}
                            </h3>
                            <p>{{__('Wealth Tobacco menggunakan bahan berkualitas dengan racikan sempurna')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="feature-text">
                            <h3>{{__('Produksi Besar')}}
                            </h3>
                            <p>{{__('Pabrik kami memiliki kapasitas produksi yang besar')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="feature-text">
                            <h3>{{__('Seluruh Dunia')}}
                            </h3>
                            <p>{{__('Kami siap melayani produksi tembakau untuk pengiriman ke seluruh dunia')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>{{__('Tentang Kami')}}</p>
                        <h2>{{__('Produsen Tembakau Malang')}} </h2>
                    </div>
                    <div class="about-text">
                        <p>
                            {{__('Wealth Tobacco adalah produsen tembakau & rokok di Malang - Jawa Timur. Berdiri sejak 2018 dan berpengalaman selama lebih dari satu dekade dalam mengolah tembakau menjadi produk jadi & rokok.')}}

                        </p>
                        <p>
                            {{__('Nama Wealth Tobacco berarti kemakmuran untuk diciptakan dan dibagikan untuk seluruh stakeholders kami dari petani tembakau, pemasok, distributor, karyawan, mitra bisnis hingga pelanggan serta Kota Malang yang kami cintai.')}}
                        </p>
                        <a class="btn" href="{{ route('about') }}">{{__('Lebih Lanjut')}}
                        </a>
                    </div>
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


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>{{__('Produk Kami')}}</p>
                <h2>{{__('Tembakau Berkualitas Malang')}}</h2>
                
            </div>
            <div class="about-text text-center" style="margin-top: -30px">
                <p>{{__('Berikut adalah 4 lini produk utama Wealth Tobacco Malang')}}</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    {{__('TOEH menggunakan bahan berkualitas tinggi dan racikan untuk menghasilkan detail rasa yang nikmat dan sensasional')}}
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>TOEH Original</h3>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service"><i class="fa-solid fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-2.jpg" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    {{__('TOEH Ice Menthol merupakan produk autentik Wealth Tobacco. Rasakan sensasi mentholnya yang menggoda')}} 
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>TOEH Ice Menthol</h3>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service"><i class="fa-solid fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-3.jpg" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    {{__('Menghadirkan pengalaman merokok yang tidak terbatas dengan produk Sumber Jaya yang variatif namun nikmat')}} 
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Sumber Jaya</h3>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service"><i class="fa-solid fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-4.jpg" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    {{__('Kualitas tembakau dan bahan olahan membuat rasa produk ini berbeda dari yang lain')}}  
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Sumber Jaya Supreme</h3>
                            <a class="btn" href="img/service-1.jpg" data-lightbox="service"><i class="fa-solid fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Video Start -->
    <div class="video wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                <span></span>
            </button>
        </div>
    </div>
    
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>{{__('Team Kami')}}</p>
                <h2>{{__('Temui Team Tembakau Malang')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>CEO & Founder</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Civil Engineer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Jhon Doe</h2>
                            <p>Interior Designer</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Painter</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    

    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="section-header text-center">
                <p>Q&A</p>
                <h2>{{__('Anda Mungkin Bertanya')}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="accordion-1">
                        <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                    {{__('Dimana dapat membeli produknya?')}}
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Anda dapat membeli di toko-toko tembakau atau menghubungi distributor kami')}} <a class="textqna"  href="{{ route('distributor') }}">{{__('Klik di sini')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                    {{__('Apakah yang digunakan hanya tembakau Malang?')}}
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Wealth Tobacco Malang mendatangkan tembakau terbaik langsung dari sumbernya dari seluruh Indonesia. Anda dapat mencobanya dengan menghubungi admin kami')}} <a  href="https://api.whatsapp.com/send?phone=+6287753851544&text=Halo!%20I Wealth%20Tobacco.%20Saya%20sangat%20ingin%20mencoba%20produk Anda. Dapatkah Anda menghubungi Saya?" target="_blank" rel="noopener noreferrer">{{__('Klik di sini')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                    {{__('Apakah ada di sosial media?')}} 
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    {{__('Tentu! Kami menggunakan semua jalur sosial media untuk mencapai Anda. Berikut ini adalah link instagram kami. ')}} <a href="">{{__('Klik di sini')}}</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="accordion-2">
                        <div class="card wow fadeInRight" data-wow-delay="0.1s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                    {{__('Apakah Wealth Tobacco membuat produk rokok?')}}
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    {{__('Kami membuat produk tembakau linting untuk menyajikan pengalaman merokok yang menyenangkan dan tidak membosankan. Anda dapat mencampur berbagai produk')}} <a href="{{ route('sumberjaya') }}"> Sumber Jaya </a>  {{__('kami sesuka Anda.')}}
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.2s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                    {{__('Bagaimana cara mengolah tembakau?')}}
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    {{__('Kami senang dengan rasa penasaran Anda. Olahan kami sangat nikmat dan sensasional dengan campuran bahan-bahan berkualitas yang rahasia. Anda dapat melihat bagaimana cara mengolah tembakau melalui laman blog kami.')}} <a href="{{route('blog')}}">{{__('Klik di sini')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                    {{__('Bisa kirim ke kota saya?')}}
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    {{__('Wealth Tobacco sangat membuka pintu selebar-lebarnya untuk mitra dan partnership. Demikian juga jika Anda berada jauh dari Malang, kami akan mengirimkan produk kami ke depan halaman Anda. Hubungi admin kami')}} <a  href="https://api.whatsapp.com/send?phone=+6287753851544&text=Halo!%20I Wealth%20Tobacco.%20Saya%20sangat%20ingin%20mencoba%20produk Anda. Dapatkah Anda menghubungi Saya?" target="_blank" rel="noopener noreferrer">{{__('Klik di sini')}}</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card wow fadeInRight" data-wow-delay="0.4s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInRight" data-wow-delay="0.5s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                    Lorem ipsum dolor sit amet?
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->
    <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Customer Name</h3>
                            <h4>profession</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Blog</p>
                <h2>{{__('Catatan Wealth Tobacco')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>{{__('Tips Memilih Tembakau')}}</h3>
                            <a class="btn" href="{{ route('blog1') }}">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Ifan</a></p>
                            {{-- <p>In<a href="">Construction</a></p> --}}
                        </div>
                        <div class="blog-text">
                            <p>
                                {{__('Tembakau memang nikmat ketika dihisap, namun Anda harus memikirkan beberapa hal sebelumnya.')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>{{__('Cara Mengolah Tembakau')}}</h3>
                            <a class="btn" href="{{ route('blog2') }}">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Ana</a></p>
                            {{-- <p>In<a href="">Construction</a></p> --}}
                        </div>
                        <div class="blog-text">
                            <p>
                                {{__('Mengolah tembakau tidak semudah membuat makanan sehari-hari di rumah. Diperlukan konsistensi dan fokus yang tinggi.')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>{{__('Sejarah Kretek')}}
                            </h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Ngurah Oka</a></p>
                            {{-- <p>In<a href="">Construction</a></p> --}}
                        </div>
                        <div class="blog-text">
                            <p>
                                {{__('Kita menemukan banyak merek rokok luar negeri di pasaran. Tapi apakah Anda tahu bahwa kretek adalah produk asli Indonesia?')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection