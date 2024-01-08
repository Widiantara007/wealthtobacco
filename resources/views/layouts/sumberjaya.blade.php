@extends('main')
@section('content')
<!-- Page Header Start -->
<div class="page-header " style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>SUMBER JAYA</h2>
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
                          <h2>{{__('Rasa Identik')}}
                          </h2>
                      </div>
                      <div class="about-text">
                          <p>{{__('Kami menerjemahkan kembali rasa yang diinginkan pasar ke dalam produk Sumber Jaya. Lebih dari dua puluh produk telah kami reinterpretasikan kembali dengan cita rasa yang identik namun tidak sama. Sebagai produsen tembakau asal Malang, kami juga menggunakan tembakau asal Malang sebagai bahan dasar dari produk Sumber Jaya. Namun untuk mendapatkan cita rasa yang kaya, Wealth Tobacco Malang tidak menggunakan bahan single origin. Kami mendatangkan tembakau berkualitas dari berbagai sumber.')}}

                        </p>
  
                          <p>{{__('Sumber Jaya diciptakan tidak untuk menyaingi, atau meniru, atau merusak produk rokok pabrikasi yang telah ada. Wealth Tobacco mengeluarkan produk ini dengan maksud menghadirkan pengalaman merokok yang berbeda. Jika rasa rokok adalah harga mati, maka tidak dengan Sumber Jaya. Jika Anda bosan dengan kretek super, mungkin Anda ingin menambahkan notasi menthol, atau menambahkan rasa american blend yang polos untuk mengurangi rasa cengkihnya dalam satu batang rokok. Ini adalah pengalaman yang luar biasa dan tidak membosankan.')}}


                          </p>
                          
                          <p>{{__('Produk Sumber Jaya dari Wealth Tobacco telah berbandrol, bercukai, dan dikemas dalam kemasan 1 kilogram. Anda dapat mencoba sensasinya di toko-toko tembakau terdekat atau hubungi kami melalui')}} <a  href="https://api.whatsapp.com/send?phone=+6287753851544&text=Halo!%20I Halo saya ingin mencoba produk Sumber Jaya dari Wealth Tobacco. Bantu saya untuk mendapatkannya." target="_blank" rel="noopener noreferrer">{{__('Link Ini.')}}</a></p>
                          
  
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