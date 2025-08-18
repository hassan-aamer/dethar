@extends('web.layouts.app')
@section('title', __('attributes.home'))
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* تحسينات عامة */
        :root {
            --primary-color: #EA9323;
            --secondary-color: #333;
            --text-color: #555;
            --light-bg: #f9f9f9;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --card-hover-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        /* تحسينات قسم Hero */
        #hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 100%);
        }

        .hero-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
            transition: transform 10s ease;
        }

        #hero:hover .hero-bg {
            transform: scale(1.05);
        }

        .hero .container {
            position: relative;
            z-index: 2;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero h2 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeInUp 1s ease;
        }

        .hero h5 {
            font-size: clamp(1rem, 2.5vw, 1.5rem);
            font-weight: 300;
            max-width: 800px;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.3s both;
        }

        /* تحسينات الأقسام النصية */
        .about.section {
            padding: 100px 0;
            position: relative;
        }

        .about.section:nth-child(odd) {
            background-color: var(--light-bg);
        }

        .about .img-fluid {
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
        }

        .about .img-fluid:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .about h3 {
            font-size: clamp(1.8rem, 3vw, 2.2rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--secondary-color);
            position: relative;
            display: inline-block;
        }

        .about h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .about h3:hover::after {
            width: 100px;
        }

        .about p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-color);
            margin-bottom: 1.5rem;
        }

        /* تحسينات قسم المنتجات */
        .services.section {
            padding: 100px 0;
            background: linear-gradient(to bottom, #ffffff 0%, var(--light-bg) 100%);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title span {
            font-size: 1rem;
            color: var(--primary-color);
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: block;
            margin-bottom: 10px;
        }

        .section-title h2 {
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 700;
            color: var(--secondary-color);
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }

        .services .swiper-container {
            padding: 30px 0;
            overflow: hidden;
        }

        .services .swiper-slide {
            height: auto;
            padding: 15px;
        }

        .services .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            display: flex;
            flex-direction: column;
            background: white;
        }

        .services .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-hover-shadow);
        }

        .services .card-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .services .card-img::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.3) 100%);
            z-index: 1;
        }

        .services .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .services .card:hover .card-img img {
            transform: scale(1.1);
        }

        .services .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .services .card h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--secondary-color);
            transition: color 0.3s ease;
        }

        .services .card p {
            font-size: 0.95rem;
            color: var(--text-color);
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .services .card a {
            color: var(--secondary-color);
            text-decoration: none;
            position: relative;
            align-self: flex-start;
        }

        .services .card a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .services .card:hover a::after {
            width: 100%;
        }

        .services .card:hover h3 {
            color: var(--primary-color);
        }

        /* تأثيرات الحركة */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        [data-aos="fade-up"] {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        [data-aos="fade-up"].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* تأثيرات خاصة للصور */
        .img-scale-animation {
            overflow: hidden;
            border-radius: 12px;
        }

        .img-scale-animation img {
            transition: transform 0.8s ease;
        }

        .img-scale-animation:hover img {
            transform: scale(1.05);
        }

        /* تحسينات للجوال */
        @media (max-width: 768px) {
            .about .img-fluid {
                margin-bottom: 30px;
            }

            .hero h2 {
                margin-top: 80px;
            }

            .services .card-img {
                height: 150px;
            }
        }
    </style>

@endsection
@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'baners') }}" alt=""
                class="hero-bg d-none d-md-block" data-aos="fade-in" loading="lazy">
            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'mobile_baners') }}" alt=""
                class="hero-bg d-block d-md-none" data-aos="fade-in" loading="lazy">

            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">{{ setting('title') ?? '' }}</h2>
                        <h5 data-aos="fade-up" data-aos-delay="100">
                            {!! nl2br(e(setting('description') ?? '')) !!}
                        </h5>
                        <div>
                            <a href="#products" class="btn  btn-lg me-2" style="background-color: #EA9323;">Products</a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="img-scale-animation">
                            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'about') }}"
                                class="img-fluid" alt="" loading="lazy">
                        </div>
                    </div>

                    <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>About Us</h3>
                        <p>{!! nl2br(e(setting('about') ?? '')) !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->


        @if ($result['products']->count())
            <!-- Products Section -->
            <section id="products" class="services section py-5">
                <div class="container">
                    <div class="section-title text-center mb-5" data-aos="fade-up">
                        <h2>Products</h2>
                        {{-- <p class="mx-auto" style="max-width: 700px;">
                            Our commitment is to ensure client satisfaction by delivering top-notch products at competitive
                            prices.
                        </p> --}}
                    </div>

                    <div class="row g-4">
                        @foreach ($result['products']->sortBy('position') as $product)
                            <div class="col-md-3 col-sm-6">
                                <div class="card h-100 text-center shadow-sm border-0">
                                    <!-- صورة المنتج -->
                                    <div class="card-img">
                                        <img src="{{ App\Helpers\Image::getMediaUrl($product, 'products') }}"
                                            alt="{{ $product->title ?? '' }}" class="img-fluid"
                                            style="width: 100%; height: 200px; object-fit: cover;">
                                    </div>
                                    <!-- بيانات المنتج -->
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mt-3">{{ $product->title ?? '' }}</h5>
                                        <p class="card-text small text-muted">
                                            {{ Str::limit($product->description ?? '', 60) }}
                                        </p>
                                        <a href="{{ route('product.details', $product->id) }}" class="">
                                            View More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <!-- /Products Section -->
        @endif

        <!-- Vision Section -->
        <section id="vision" class="about section">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6 position-relative align-self-start order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="img-scale-animation">
                            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'vision_image') }}"
                                class="img-fluid" alt="" loading="lazy">
                        </div>
                    </div>

                    <div class="col-lg-6 content order-last" data-aos="fade-up" data-aos-delay="100">
                        <h3>Vision</h3>
                        <p>{!! nl2br(e(setting('vision') ?? '')) !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Vision Section -->

        <!-- Mission Section -->
        <section id="mission" class="about section">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="img-scale-animation">
                            <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'mission_image') }}"
                                class="img-fluid" alt="" loading="lazy">
                        </div>
                    </div>

                    <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>Mission</h3>
                        <p>{!! nl2br(e(setting('mission') ?? '')) !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Mission Section -->

    </main>
@endsection
{{-- @section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper(".mySwiper", {
                slidesPerView: 5,
                spaceBetween: 20,
                loop: false,
                speed: 800,
                effect: "slide",
                grabCursor: true,
                loop: true,
                observer: true,
                observeParents: true,
                autoplay: {
                    delay: 500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    1280: {
                        slidesPerView: 5,
                        spaceBetween: 20,
                    },
                },
            });
        });
    </script>


@endsection --}}
