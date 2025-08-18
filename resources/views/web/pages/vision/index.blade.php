@extends('web.layouts.app')
@section('title', __('attributes.about'))
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
    <style>
        :root {
            --primary-color: #EA9323;
            --secondary-color: #333;
            --text-color: #555;
            --light-bg: #f9f9f9;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        #hero {
            position: relative;
            height: 50vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));
        }

        .hero-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        .services-list a {
            display: block;
            padding: 12px 16px;
            margin-bottom: 8px;
            background: var(--light-bg);
            border-left: 4px solid transparent;
            color: var(--text-color);
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 6px;
        }

        .services-list a:hover,
        .services-list a.active {
            border-left-color: var(--primary-color);
            background-color: #fff;
            box-shadow: var(--card-shadow);
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            #hero {
                height: 40vh;
            }

            .services-list a {
                font-size: 0.95rem;
            }
        }
    </style>
@endsection
@section('content')
    <main class="main">

        <!-- Page Title -->

        <!-- End Page Title -->





                <section id="hero" class="hero section dark-background">
            <img src="{{ page_image('about') }}" alt="" class="hero-bg d-none d-md-block"
                data-aos="fade-in" loading="lazy">
            <img src="{{ page_image('about') }}" alt="" class="hero-bg d-block d-md-none"
                data-aos="fade-in" loading="lazy">

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Vision</h1>
                        {{-- <p>{{ page('about', 'description') }}</p> --}}
                        <nav class="breadcrumbs">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Vision</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                        data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl(App\Models\Setting::first(), 'vision_image') }}" class="img-fluid" alt="" loading="lazy">
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
                    </div>

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>Vision</h3>
                        <p style="font-weight: bold;">
                            {{-- {{ page('about', 'content') }} --}}
                            {!! nl2br(e(setting('vision') ?? '')) !!}
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

        </section>
        <!-- /About Section -->
    </main>
@endsection
@section('js')

@endsection
