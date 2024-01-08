<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>{{__('Alamat Kantor')}}</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Jl. Karya Timur No.35, Purwantoro, Belimbing - Malang
                    </p>
                    <p><i class="fa fa-phone-alt"></i>+6287753851544
                    </p>
                    <p><i class="fa fa-envelope"></i>wealthtobacco@gmail.com
                    </p>
                    <div class="footer-social">
                        {{-- <a href=""><i class="fab fa-twitter"></i></a> --}}
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>{{__('Produk')}}</h2>
                    <a href="{{route('toehori')}}">TOEH Original</a>
                    <a href="{{route('toehice')}}">TOEH Ice Menthol</a>
                    <a href="{{route('sumberjaya')}}">Sumber Jaya</a>
                    <a href="{{route('sumberjayasupreme')}}">Super Jaya Supreme</a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>{{__('Laman Penting')}}</h2>
                    <a href="{{route ('index')}}">{{__('Beranda')}}</a>
                    <a href="{{route ('about')}}">{{__('Tentang')}}</a>
                    {{-- <a href="{{route ('product')}}">Product</a> --}}
                    <a href="{{route ('blog')}}">{{__('Blog')}}</a>
                    <a href="{{route ('distributor')}}">{{__('Distributor')}}</a>
                    <a href="{{route ('contact')}}">{{__('Hubungi')}}</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="newsletter">
                    <h2>{{__('Respon Cepat')}}</h2>
                    <p>{{__('Untuk respon lebih cepat, hubungi admin kami di bawah ini')}}
                    </p>
                </div>
                <div class="centeredfooter-button text-center align-items-center">
                    <a href="https://api.whatsapp.com/send?phone=+6287753851544
                    &text=Halo!%20I Wealth%20Tobacco.%20Saya%20sangat%20ingin%20mencoba%20produk Anda. Dapatkah Anda menghubungi Saya?" target="_blank" rel="noopener noreferrer">{{__('Kontak Kami')}}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container footer-menu">
        <div class="f-menu">
            <a href="">Terms of use</a>
            <a href="">Privacy policy</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
        </div>
    </div> --}}
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#">Wealth Tobaco</a>, All Right Reserved.</p>
            </div>
            
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <div class="col-md-6">
                {{-- <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p> --}}
            </div>
        </div>
    </div>
</div>