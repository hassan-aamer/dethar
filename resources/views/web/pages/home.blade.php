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

        .services .swiper-slide .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 320px;
            /* يمكن تعديل الارتفاع حسب الحاجة */
            display: flex;
            flex-direction: column;
        }

        .services .swiper-slide .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .services .swiper-slide .card-img {
            height: 160px;
            /* ارتفاع الصورة */
            overflow: hidden;
        }

        .services .swiper-slide .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .services .swiper-slide .card:hover .card-img img {
            transform: scale(1.05);
        }

        .services .swiper-slide .card h3 {
            padding: 15px 15px 0;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .services .swiper-slide .card p {
            padding: 0 15px 15px;
            font-size: 0.9rem;
            color: #555;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* عدد الأسطر المراد عرضها */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .services .swiper-slide .card a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .services .swiper-slide .card:hover a {
            color: #EA9323;
            /* لون عند التحويم */
        }


        /*  About, Vision, Mission */
        .about.section {
            padding: 100px 0;
            position: relative;
        }

        .about.section:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .about .img-fluid {
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .about .img-fluid:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .about h3 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #333;
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
            background: #EA9323;
        }

        .about p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
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

                <div class="container">
                    <div class="swiper-container mySwiper" data-aos="fade-up">
                        <div class="swiper-wrapper">
                            @foreach ($result['products']->sortBy('position') as $product)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ App\Helpers\Image::getMediaUrl($product, 'products') }}"
                                                alt="{{ $product->title ?? '' }}" class="img-fluid" loading="lazy">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                <a href="{{ route('product.details', $product->id) }}"
                                                    class="stretched-link">{{ shortenText($product->title ?? '') }}</a>
                                            </h3>
                                            <p>{{ shortenText($product->description ?? '') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add pagination and navigation -->
                        {{-- <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
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
        // في ملف JavaScript الخاص بك
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 3, // عدد الشرائح المرئية
            spaceBetween: 30, // المسافة بين الشرائح
            speed: 1000, // ✅ سرعة الانتقال بين الشرائح بالميلي ثانية (1000 = 1 ثانية)
            effect: "slide", // ✅ تأثير الانزلاق الناعم (الافتراضي)
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>

@endsection
