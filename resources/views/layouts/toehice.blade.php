@extends('main')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header " style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>TOEH ICE MENTHOL</h2>
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
                          <h2>{{__('Ice Menthol Berkualitas Tinggi')}}

                          </h2>
                      </div>
                      <div class="about-text">
                          <p>{{__('TOEH Ice Menthol merupakan buah keberlanjutan dari produk TOEH Original. Seperti versi sebelumnya, versi Ice Menthol ini dikemas dalam kemasan 40 gram. TOEH Ice Menthol juga merupakan persembahan dari pabrik tembakau Malang, Wealth Tobacco, yang laris di pasaran.')}}
                        </p>
  
                          <p>{{__('TOEH Ice Menthol menggunakan tembakau berkualitas tinggi serta racikan Ice Menthol yang tiada duanya. Bagi Anda pecinta rokok menthol, menghisap produk tembakau menthol ini akan membawa Anda ke pada sebuah pengalaman baru, rasa yang tidak pernah ditemui sebelumnya, serta aroma yang menawan. Di mana semua pengalaman cita rasa ini hanya akan Anda temui di Wealth Tobacco Malang.')}}

                          </p>
                          
                          <p>{{__('Tembakau berbandrol ini adalah produk hasil dari inovasi tiada henti dari Wealth Tobacco dalam menyajikan pengalaman merokok yang berbeda. Demikian juga proses riset selama berdekade kami tuangkan dalam produk yang nikmat dan sensasional ini. Hubungi kami sekarang juga dan Wealth Tobacco Malang akan mengobati rasa penasaran Anda.')}}</p>
  
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