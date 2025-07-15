    <header id="header" class="@yield('header_class','header d-flex align-items-center fixed-top')">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'logo') }}" alt="">
                {{-- <h1 class="sitename">{{ setting('name') }}</h1> --}}
                {{-- <span>.</span> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="active">{{__('attributes.home')}}<br /></a>
                    </li>
                    <li><a href="{{route('home')}}#about">{{__('attributes.about')}}</a></li>
                    <li><a href="{{route('home')}}#services">{{__('attributes.services')}}</a></li>
                    <li><a href="{{route('home')}}#portfolio">{{__('attributes.products')}}</a></li>
                    {{-- <li><a href="{{route('home')}}#team">Team</a></li> --}}
                    <li><a href="{{route('home')}}#contact">{{__('attributes.contacts')}}</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{route('home')}}#about">Get Started</a>
        </div>
    </header>
