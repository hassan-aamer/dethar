  <header id="header" style="background-color: #2E6344;" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              {{-- <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'logo') }}" alt=""> --}}
              <h1 class="sitename" style="color: #EA9323;">{{ setting('name') ?? '' }}</h1>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  <li><a href="{{ route('home') }}"
                          class=" {{ request()->routeIs('home') ? 'active' : '' }}">Home<br></a></li>
                  <li><a href="{{ route('about') }}"
                          class=" {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                  <li class="dropdown"><a href="#"><span>What We Do</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          @foreach (WhatWeDoCategories() as $category)
                              <li><a href="{{ route('what', $category->id) }}">{{ $category->title ?? '' }}</a></li>
                          @endforeach
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Added value</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          @foreach (ValueAddCategories() as $category)
                              <li><a href="{{ route('value', $category->id) }}">{{ $category->title ?? '' }}</a></li>
                          @endforeach
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Our products</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          @foreach (ProductCategories() as $category)
                              <li><a href="{{ route('products', $category->id) }}">{{ $category->title ?? '' }}</a></li>
                          @endforeach
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Blogs</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          @foreach (BlogCategories() as $category)
                              <li><a href="{{ route('blog', $category->id) }}">{{ $category->title ?? '' }}</a></li>
                          @endforeach
                      </ul>
                  </li>
                  {{-- <li><a href="services.html">Services</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="contact.html">Contact</a></li> --}}
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <a class="btn-getstarted" href="{{ route('contact') }}">Get in touch</a>

      </div>
  </header>
