  <header id="header" style="background-color: #2E6344;" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="index.html" class="logo d-flex align-items-center me-auto">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <h1 class="sitename">{{ setting('name') ?? '' }}</h1>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  <li><a href="{{ route('home') }}" class="active">Home<br></a></li>
                  <li><a href="{{ route('about') }}">About</a></li>
                  <li class="dropdown"><a href="#"><span>What We Do</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="#">Dropdown 1</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Value add</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="#">Dropdown 1</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Our products</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="#">Dropdown 1</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Blogs</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="#">Dropdown 1</a></li>
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
