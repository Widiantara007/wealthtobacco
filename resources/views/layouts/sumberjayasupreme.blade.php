@extends('main')
@section('content')
<!-- Page Header Start -->
<div class="page-header " style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>SUMBER JAYA SUPREME</h2>
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
                          <h2>{{__('Lebih maju dengan Supreme')}}
                          </h2>
                      </div>
                      <div class="about-text">
                          <p>{{__('Jika Anda mulai terbiasa, gemar, dan suka dengan Sumber Jaya, mungkin ini saatnya Anda mencoba Sumber Jaya Supreme. Tembakau racikan pabrik tembakau Malang ini dikemas dalam 500 gram. Perbedaanya terletak dari bahan baku yang berkualitas super. Pada prinsipnya, semua produk Wealth Tobacco tidak menggunakan tembakau rajangan halus seperti produk lintingan yang beredar di pasaran. Produk Wealth Tobacco menggunakan tembakau dengan grade rokok, dan rajangan yang lebih kasar sehingga Anda dapat merasakan sensasi merokok pada setiap produk Wealth Tobacco, terutama Sumber Jaya Supreme.')}}


                        </p>
                        {{__('Sumber Jaya Supreme memiliki beberapa varian rasa yang idealis, nikmat, autentik dan sensasional. Semua rasa dari Sumber Jaya Supreme dibuat dengan bumbu dan tembakau racikan terbaik dari segi kualitas dan rasa sehingga produk Sumber Jaya Supreme sangat laku di pasaran.')}}
                          <p>


                          </p>
                          {{__('Nikmati sensasinya dan lengkapi koleksinya untuk menambah dan mewarnai cita rasa Anda sehari-hari.')}}</p>
                          <p>
  
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