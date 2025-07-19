@extends('web.layouts.app')
@section('title', __('attributes.home'))
@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'baners') }}" alt=""
                class="hero-bg" data-aos="fade-in">

            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">{{ setting('title') ?? '' }}</h2>
                        <p data-aos="fade-up" data-aos-delay="100">{{ setting('description') ?? '' }}</p>

                        {{-- <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                            data-aos-delay="200">
                            <input type="text" class="form-control" placeholder="Your ZIP code or City. e.g. New York">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form> --}}

                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="232"
                                        data-purecounter-duration="0" class="purecounter">232</span>
                                    <p>Clients</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="521"
                                        data-purecounter-duration="0" class="purecounter">521</span>
                                    <p>Projects</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="1453"
                                        data-purecounter-duration="0" class="purecounter">1453</span>
                                    <p>Support</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="0"
                                        class="purecounter">32</span>
                                    <p>Workers</p>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('web/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
                    </div>

                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h4 class="title">Lorem Ipsum</h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                            <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Dolor Sitema</h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat tarad limino ata</p>
                            <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Sed ut perspiciatis</h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur</p>
                            <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'about') }}"
                            class="img-fluid" alt="">
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
                    </div>

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>About Us</h3>
                        <p>
                            {{ setting('about') ?? '' }}
                        </p>
                        {{-- <ul>
                            <li>
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata
                                        redi</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Voluptatem et qui exercitationem</h5>
                                    <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime
                                        veniam</p>
                                </div>
                            </li>
                        </ul> --}}
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        @if ($result['services']->count())
            <!-- Services Section -->
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span>Our Services<br></span>
                    <h2>Our ServiceS</h2>
                    {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
                </div><!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        @foreach ($result['services']->sortBy('position') as $service)
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{ App\Helpers\Image::getMediaUrl($service, 'services') }}"
                                            alt="{{ $service->title ?? '' }}" class="img-fluid">
                                    </div>
                                    <h3><a href="#"
                                            class="stretched-link">{{ shortenText($service->title ?? '') }}</a></h3>
                                    <p>{{ shortenText($service->description ?? '') }}</p>
                                </div>
                            </div><!-- End Card Item -->
                        @endforeach
                    </div>
                </div>
            </section><!-- /Services Section -->
        @endif

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'callToActions') }}" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <a class="cta-btn" href="https://wa.me/{{ setting('whatsapp') }}">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

@if ($result['features']->count())
<!-- Features Section -->
<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Features</span>
        <h2>Features</h2>
    </div><!-- End Section Title -->

    <div class="container">
        @foreach ($result['features'] as $index => $feature)
            @php
                $isEven = $index % 2 === 0;
                // $image = $feature->image ?? 'assets/img/default-feature.jpg';
            @endphp

            <div class="row gy-4 align-items-center features-item mb-5">
                <!-- صورة -->
                <div class="col-md-5 {{ $isEven ? '' : 'order-1 order-md-2' }} d-flex align-items-center"
                     data-aos="zoom-out" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <img src="{{ App\Helpers\Image::getMediaUrl($feature, 'features') }}" class="img-fluid" alt="{{ $feature->title }}">
                </div>

                <!-- نص -->
                <div class="col-md-7 {{ $isEven ? '' : 'order-2 order-md-1' }}"
                     data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <h3>{{ $feature->title }}</h3>
                    <p class="fst-italic">{{ $feature->description }}</p>

                    {{-- @if (!empty($feature->points) && is_array($feature->points))
                        <ul>
                            @foreach ($feature->points as $point)
                                <li><i class="bi bi-check"></i><span> {{ $point }}</span></li>
                            @endforeach
                        </ul>
                    @endif --}}
                </div>
            </div><!-- Features Item -->
        @endforeach
    </div>

</section><!-- /Features Section -->
@endif


        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Pricing</span>
                <h2>Pricing</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Free Plan</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <h3>Business Plan</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>Developer Plan</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

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

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                        minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse
                                        veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Frequently Asked Questions</span>
                <h2>Frequently Asked Questions</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="faq-container">

                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                        purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                                <div class="faq-content">
                                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Faq Section -->

    </main>
@endsection
