@extends('web.layouts.app')
@section('title', __('attributes.home'))
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .hero-bg {
            width: 100%;
            height: 100vh;
            object-fit: contain;
            object-position: center;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }

        #hero {
            position: relative;
            overflow: hidden;
        }

        .hero .container {
            position: relative;
            z-index: 2;
        }
    </style>

@endsection
@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section style="height: 100vh;" id="hero" class="hero section dark-background">

            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'baners') }}" alt=""
                class="hero-bg d-none d-md-block" data-aos="fade-in" loading="lazy">

            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'mobile_baners') }}" alt=""
                class="hero-bg d-block d-md-none" data-aos="fade-in" loading="lazy" style="margin-top: 50px;">

            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-11 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 class="d-none d-xl-block" style="margin-top: 30px;font-size: 50px;" data-aos="fade-up">
                            {{ setting('title') ?? '' }}</h2>
                        <h5 class="d-none d-xl-block" style="margin-top: 5px; line-height: 1.3;font-size: 25px;"
                            data-aos="fade-up" data-aos-delay="100">
                            {{-- {{ setting('description') ?? '' }} --}}
                            {!! nl2br(e(setting('description') ?? '')) !!}
                        </h5>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'about') }}"
                            class="img-fluid" alt="" loading="lazy">
                    </div>

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>About</h3>
                        <p style="font-weight: bold;">
                            {{-- {{ setting('about') ?? '' }} --}}
                            {!! nl2br(e(setting('about') ?? '')) !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-first order-lg-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'vision_image') }}"
                            class="img-fluid" alt="" loading="lazy">
                    </div>

                    <div class="col-lg-6 content order-last order-lg-last" data-aos="fade-up" data-aos-delay="100">
                        <h3>Vision</h3>
                        <p style="font-weight: bold;">
                            {{-- {{ setting('vision') ?? '' }} --}}
                            {!! nl2br(e(setting('vision') ?? '')) !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'mission_image') }}"
                            class="img-fluid" alt="" loading="lazy">
                    </div>

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>Mission</h3>
                        <p style="font-weight: bold;">
                            {{-- {{ setting('mission') ?? '' }} --}}
                            {!! nl2br(e(setting('mission') ?? '')) !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>


        @if ($result['products']->count())
            <!-- Services Section -->
            <section id="services" class="services section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span>Our Products<br></span>
                    <h2>Our Products</h2>
                </div><!-- End Section Title -->

                <div class="swiper-container mySwiper" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        @foreach ($result['products']->sortBy('position') as $product)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{ App\Helpers\Image::getMediaUrl($product, 'products') }}"
                                            alt="{{ $product->title ?? '' }}" class="img-fluid" loading="lazy">
                                    </div>
                                    <h3>
                                        <a href="{{ route('product.details', $product->id) }}"
                                            class="stretched-link">{{ shortenText($product->title ?? '') }}</a>
                                    </h3>
                                    <p>{{ shortenText($product->description ?? '') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </section>
            <!-- /Services Section -->
        @endif


    </main>
@endsection
@section('js')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper(".mySwiper", {
                loop: true,
                spaceBetween: 30,
                slidesPerView: 1,
                speed: 1000, // ✅ سرعة الانتقال بين الشرائح بالميلي ثانية (1000 = 1 ثانية)
                effect: "slide", // ✅ تأثير الانزلاق الناعم (الافتراضي)
                grabCursor: true, // ✅ لتغيير المؤشر عند السحب (يوحي بالسلاسة)
                autoplay: {
                    delay: 1500, // ⏱️ تأخير بين كل شريحة
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    }
                }
            });
        });
    </script>


@endsection
