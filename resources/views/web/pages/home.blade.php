@extends('web.layouts.app')
@section('title', __('attributes.home'))
@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'baners') }}" alt=""
                data-aos="fade-in" />

            <div class="container">
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h2>{{ setting('name') }}</h2>
                        <p>{{ setting('title') }}</p>
                    </div>
                </div>
                @if ($result['features']->count())
                    <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($result['features']->sortBy('position') as $feature)
                            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="{{ $feature->icon_class ?? '' }}"></i>
                                    <h3><a href="">{{ $feature->title ?? '' }}</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
            @endif
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'about') }}"
                            class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>{{ setting('about') }}</h3>
                        <p class="fst-italic">
                            {{ setting('description') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        @if ($result['sliders']->count())
            <!-- Clients Section -->
            <section id="clients" class="clients section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($result['sliders']->sortBy('position') as $sliders)
                                <div class="swiper-slide">
                                    <img src="{{ App\Helpers\Image::getMediaUrl($sliders, 'sliders') }}" class="img-fluid"
                                        alt="{{ $sliders->title ?? '' }}" />
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <!-- /Clients Section -->
        @endif

        <!-- Features Section -->
        {{-- <section id="features" class="features section">
            <div class="container">
                <div class="row gy-4">
                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="web/img/features-bg.jpg" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-archive flex-shrink-0"></i>
                            <div>
                                <h4>Est labore ad</h4>
                                <p>
                                    Consequuntur sunt aut quasi enim aliquam quae harum pariatur
                                    laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>
                        <!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-basket flex-shrink-0"></i>
                            <div>
                                <h4>Harum esse qui</h4>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt
                                </p>
                            </div>
                        </div>
                        <!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-broadcast flex-shrink-0"></i>
                            <div>
                                <h4>Aut occaecati</h4>
                                <p>
                                    Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                                    maiores omnis facere
                                </p>
                            </div>
                        </div>
                        <!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-camera-reels flex-shrink-0"></i>
                            <div>
                                <h4>Beatae veritatis</h4>
                                <p>
                                    Expedita veritatis consequuntur nihil tempore laudantium
                                    vitae denat pacta
                                </p>
                            </div>
                        </div>
                        <!-- End Features Item-->
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- /Features Section -->


        @if ($result['services']->count())
            <!-- Services Section -->
            <section id="services" class="services section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Check our Services</p>
                </div>
                <!-- End Section Title -->
                <div class="container">
                    <div class="row gy-4">
                        @foreach ($result['services']->sortBy('position') as $service)
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-item position-relative">
                                    <div class="icon">
                                        {{-- <i class="bi bi-broadcast"></i> --}}
                                        <img src="{{ App\Helpers\Image::getMediaUrl($service, 'services') }}"
                                            alt="{{ $service->title ?? '' }}" style="width: 50px;height: 50px;" />
                                    </div>
                                    <a href="{{ route('services.details', $service->id) }}" class="stretched-link">
                                        <h3>{{ shortenText($service->title ?? '', 20) }}</h3>
                                    </a>
                                    <p>
                                        {{ shortenText($service->description ?? '', 90) }}
                                    </p>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- /Services Section -->
        @endif

        @if (setting('whatsapp') == !null)
            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action section dark-background">
                <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'callToActions') }}"
                    alt="" />

                <div class="container">
                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-10">
                            <div class="text-center">
                                <h3>Call To Action</h3>
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </p>
                                <a class="cta-btn" href="https://wa.me/{{ setting('whatsapp') }}">Call To Action</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Call To Action Section -->
        @endif

        @if ($result['products']->count())
            <!-- Portfolio Section -->
            <section id="portfolio" class="portfolio section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Check our Portfolio</p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">{{ __('attributes.all') }}</li>
                            @foreach ($result['categories']->sortBy('position') as $category)
                                <li data-filter=".filter-{{ $category->id }}">{{ $category->title }}</li>
                            @endforeach
                        </ul>
                        <!-- End Portfolio Filters -->

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($result['categories']->sortBy('position') as $category)
                                @foreach ($result['products']->where('category_id', $category->id)->sortBy('position') as $product)
                                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $category->id }}">
                                        <img src="{{ App\Helpers\Image::getMediaUrl($product, 'products') }}"
                                            class="img-fluid" alt="{{ $product->title }}" />
                                        <div class="portfolio-info">
                                            <h4>{{ shortenText($product->title ?? '', 20) }}</h4>
                                            <p>{{ shortenText($product->description ?? '', 40) }}</p>
                                            <a href="{{ App\Helpers\Image::getMediaUrl($product, 'products') }}"
                                                title="{{ $product->title }}"
                                                data-gallery="portfolio-gallery-{{ $category->id }}"
                                                class="glightbox preview-link">
                                                <i class="bi bi-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('product.details', $product->id) }}" title="تفاصيل أكثر"
                                                class="details-link">
                                                <i class="bi bi-link-45deg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Portfolio Item -->
                                @endforeach
                            @endforeach
                        </div>
                        <!-- End Portfolio Container -->

                    </div>
                </div>

            </section>
            <!-- /Portfolio Section -->
        @endif

        <!-- Stats Section -->
        {{-- <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <img src="web/img/stats-img.jpg" alt="" class="img-fluid" />
                    </div>

                    <div class="col-lg-6">
                        <h3 class="fw-bold fs-2 mb-3">
                            Voluptatem dignissimos provident quasi
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis
                            aute irure dolor in reprehenderit
                        </p>

                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="232"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>
                                            <strong>Happy Clients</strong>
                                            <span>consequuntur quae</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="521"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>
                                            <strong>Projects</strong>
                                            <span>adipisci atque cum quia aut</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-headset flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="1453"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>
                                            <strong>Hours Of Support</strong>
                                            <span>aut commodi quaerat</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-people flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="32"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p>
                                            <strong>Hard Workers</strong>
                                            <span>rerum asperiores dolor</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Stats Item -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- /Stats Section -->

        @if ($result['reviews']->count())
            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section dark-background">
                <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'reviews') }}"
                    class="testimonials-bg" alt="" />

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
                        <div class="swiper-wrapper">
                            @foreach ($result['reviews']->sortBy('position') as $reviews)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{ App\Helpers\Image::getMediaUrl($reviews, 'reviews') }}"
                                            class="testimonial-img" alt="" />
                                        <h3>{{ shortenText($reviews->name ?? '', 20) }}</h3>
                                        <h4>{{ shortenText($reviews->title ?? '', 20) }}</h4>
                                        {{-- <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div> --}}
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>{{ shortenText($reviews->description ?? '', 100) }}</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                                <!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <!-- /Testimonials Section -->
        @endif

        <!-- Team Section -->
        {{-- <section id="team" class="team section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>our Team</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="web/img/team/team-1.jpg" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="web/img/team/team-2.jpg" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="web/img/team/team-3.jpg" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="web/img/team/team-4.jpg" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>
            </div>
        </section> --}}
        <!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                @if (setting('map') == !null)
                    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                        <iframe style="border: 0; width: 100%; height: 270px" src="{{ setting('map') }}" frameborder="0"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- End Google Maps -->
                @endif
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ setting('address') }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ setting('phone') }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ setting('email') }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>

                    <div class="col-lg-8">
                        <form action="{{ route('contact.store') }}" method="post" data-aos="fade-up"
                            data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                                        required="" />
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" placeholder="Your Email" required="" />
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" placeholder="phone" required="" />
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6"
                                        placeholder="Message" required=""></textarea>
                                    @error('Message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    <button
                                        style="background-color: #ffc451;border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 4px;"
                                        type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection
