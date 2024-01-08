@extends('main')
@section('content')
<!-- Page Header Start -->
<div class="page-header " style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>BLOG</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Blog</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest Blog</p>
                <h2>Latest From Our Blog</h2>
            </div>
            <div class="row blog-page">
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
                            <h3>{{__('Fermentasi Tembakau')}}</h3>
                            <a class="btn" href="{{route('blog3')}}">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Ifan</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                {{__('Bak alkohol, cokelat, kopi, atau produk mahal lain, tembakau juga mengalami proses fermentasi. Simak artikel berikut.')}}
                            </p>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center" id="myPagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item "><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection