  <header id="header" style="background-color: #ede4d9;font-weight: bold;"
      class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <img style="width: 100px;" src="{{ asset('web/img/l5.png') }}" alt="logo">
              {{-- <h1 class="sitename" style="color: #EA9323;">{{ setting('name') ?? '' }}</h1> --}}
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  <li><a href="{{ route('home') }}" class=" {{ request()->routeIs('home') ? 'active' : '' }}"
                          style="color: #EA9323;">Home<br></a></li>
                  {{-- <li><a href="{{ route('about') }}" class=" {{ request()->routeIs('about') ? 'active' : '' }}"
                          style="color: #EA9323;">About</a></li> --}}
                  {{-- <li><a href="{{ route('vision') }}" class=" {{ request()->routeIs('vision') ? 'active' : '' }}"
                          style="color: #EA9323;">Vision</a></li> --}}
                  {{-- <li><a href="{{ route('mission') }}" class=" {{ request()->routeIs('mission') ? 'active' : '' }}"
                          style="color: #EA9323;">Mission</a></li> --}}
                  <li class="dropdown"><a href="#"><span style="color: #EA9323;">About</span> <i
                              class="bi bi-chevron-down toggle-dropdown" style="color: #EA9323;"></i></a>
                      <ul>

                              <li><a href="{{ route('about') }}">About</a></li>
                              <li><a href="{{ route('vision') }}">Vision</a></li>
                              <li><a href="{{ route('mission') }}">Mission</a></li>
                              <li><a href="{{ route('value') }}">Added value</a></li>
                              <li><a href="{{ route('what') }}">What We Do</a></li>

                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span style="color: #EA9323;">Media</span> <i
                              class="bi bi-chevron-down toggle-dropdown" style="color: #EA9323;"></i></a>
                      <ul>

                              <li><a href="{{ route('tds') }}">Technical Data Sheets</a></li>
                              <li><a href="{{ route('catalogs') }}">Catalogs</a></li>

                      </ul>
                  </li>
                  {{-- <li class="dropdown"><a href="#"><span style="color: #EA9323;">What We Do</span> <i
                              class="bi bi-chevron-down toggle-dropdown" style="color: #EA9323;"></i></a>
                      <ul>
                          @foreach (WhatWeDoCategories() as $category)
                              <li><a href="{{ route('what', $category->id) }}">{{ $category->title ?? '' }}</a></li>
                          @endforeach
                      </ul>
                  </li> --}}
                  {{-- <li class="dropdown"><a href="#"><span style="color: #EA9323;">Added value</span> <i
                              class="bi bi-chevron-down toggle-dropdown" style="color: #EA9323;"></i></a>
                      <ul>
                          @foreach (ValueAddCategories() as $category)
                              <li><a href="{{ route('value', $category->id) }}">{{ $category->title ?? '' }}</a></li>
                          @endforeach
                      </ul>
                  </li> --}}
                  <li class="dropdown"><a href="#"><span style="color: #EA9323;">Our products</span> <i
                              class="bi bi-chevron-down toggle-dropdown" style="color: #EA9323;"></i></a>
                      <ul>
                          @foreach (ProductCategories() as $category)
                              <li><a href="{{ route('products', $category->id) }}">{{ $category->title ?? '' }}</a>
                              </li>
                          @endforeach
                      </ul>
                  </li>
                  {{-- <li class="dropdown"><a href="#"><span style="color: #EA9323;">Blogs</span> <i
                              class="bi bi-chevron-down toggle-dropdown" style="color: #EA9323;"></i></a>
                      <ul>
                          @foreach (BlogCategories() as $category)
                              <li><a href="{{ route('blog', $category->id) }}">{{ $category->title ?? '' }}</a></li>
                          @endforeach
                      </ul>
                  </li> --}}
                  <li><a href="{{ route('blog') }}" class=" {{ request()->routeIs('blog') ? 'active' : '' }}"
                          style="color: #EA9323;">Blog<br></a></li>
                  {{-- <li><a href="services.html">Services</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="contact.html">Contact</a></li> --}}
              </ul>
              <i style="color: #EA9323;" class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <a class="btn-getstarted" href="{{ route('contact') }}">Get in touch</a>

      </div>
  </header>
