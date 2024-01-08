 <!-- Nav Bar Start -->
 <div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                     <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }} ">{{__('Beranda')}}</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }} ">{{__('Tentang')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{__('Produk')}}</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('toehori') }}" class="dropdown-item">TOEH Original</a>
                            <a href="{{ route('toehice') }}" class="dropdown-item">TOEH Ice Menthol</a>
                            <a href="{{ route('sumberjaya') }}" class="dropdown-item">SUMBER JAYA</a>
                            <a href="{{ route('sumberjayasupreme') }}" class="dropdown-item">SUMBER JAYA Supreme</a>
                        </div>
                    </div>
                    <a href="{{ route('blog') }}" class="nav-item nav-link {{ Request::is('blog') ? 'active' : '' }} ">Blog</a>
                    <a href="{{ route('distributor') }}" class="nav-item nav-link  {{ Request::is('distributor') ? 'active' : '' }}   ">{{__('Distributor')}}</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }} ">{{__('Hubungi')}}</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('img/'.app()->getLocale().'.png') }}" alt="" class="flag-icon">{{__('Pilih Bahasa')}}
                        </a>
                        <div class="dropdown-menu">
                            @if(app()->getLocale()!='en')
                                <a href="{{ url('locale/en') }}" class="dropdown-item">
                                    <img class="flag-icon" src="{{ asset('img/en.png') }}" alt="">{{ __('English') }}
                                </a>
                            @endif
                            @if(app()->getLocale()!='id')
                                <a href="{{ url('locale/id') }}" class="dropdown-item">
                                    <img class="flag-icon" src="{{ asset('img/id.png') }}" alt="">{{ __('Indonesia') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <div class="ml-auto">
                    
                    <a class="btn" href="https://api.whatsapp.com/send?phone=+6287753851544
                    &text=Halo!%20I Wealth%20Tobacco.%20Saya%20sangat%20ingin%20mencoba%20produk Anda. Dapatkah Anda menghubungi Saya?" target="_blank" rel="noopener noreferrer" class="btn btn-dark rounded-pill py-2 px-4 m-2">{{__('Hubungi Sekarang')}}</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->