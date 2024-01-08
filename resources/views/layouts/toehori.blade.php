@extends('main')
@section('content')
    <!-- Page Header Start -->
        <div class="page-header " style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>TOEH ORIGINAL</h2>
                    </div>
                    <div class="col-12">
                        <a href="">{{__('Beranda')}}</a>
                        <a href="">{{__('Produk')}}</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Page Header End -->
    <!-- Product Start -->
    <div class="blog">
      <!-- Product Start -->
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
                        {{-- <p>Tentang Wealth Tobacco</p> --}}
                        <h2>{{__('Tembakau Olahan Ekstrak Herbal')}}
                        </h2>
                    </div>
                    <div class="about-text">
                        <p>{{__('TOEH merupakan merek asli Wealth Tobacco Malang yang menggunakan tembakau berkualitas terbaik. Kami sangat teliti dengan cita rasa, after taste, dan bentuk dari TOEH karena TOEH merupakan citra utama dan wajah dari Wealth Tobacco. Dibalut dengan kemasan eksklusif berisi 40 gram, TOEH sangat dicintai dan dicari-cari oleh para penikmat tembakau di seluruh Indonesia.')}}</p>

                        <p>{{__('Wealth Tobacco, yang merupakan pabrik tembakau Malang, tidak berhenti mencari, menemukan, bahkan meneliti tentang tembakau dari proses penanaman, curing, hingga mengolahnya menjadi barang siap konsumsi. TOEH sendiri adalah simbol dari pengalaman kami bertahun-tahun dalam menyajikan produk yang berkualitas tinggi, disenangi pasar, serta sesuai dengan selera dan hati masyarakat Indonesia.')}}
                        </p>
                        
                        <p>{{__('Inilah TOEH, yang merupakan kependekan dari Tembakau Olahan Herbal, yang dengan bangga kami persembahkan untuk Anda. Dari Malang untuk Indonesia.')}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
    <div class="container mb-5">
        <div class="image-gallery">
            <img src="img/blog-3.jpg" alt="Image 1">
            <img src="img/blog-3.jpg" alt="Image 2">
            <img src="img/blog-3.jpg" alt="Image 3">
            <img src="img/blog-3.jpg" alt="Image 4">
          </div>
    </div>
    <!-- Product End -->
@endsection

