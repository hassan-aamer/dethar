@extends('web.layouts.app')

@section('title', __('attributes.product_details'))

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ page_image('product details') }}" alt=""
                class="hero-bg d-none d-md-block" data-aos="fade-in" loading="lazy">
            <img src="{{ page_image('product details') }}" alt=""
                class="hero-bg d-block d-md-none" data-aos="fade-in" loading="lazy">

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>{{ page('product details', 'title') }}</h1>
                        <p>{{ page('product details', 'description') }}</p>
                        <nav class="breadcrumbs">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ page('product details', 'title') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Product Details Section -->
        <section id="product-details" class="about section">
            <div class="container">
                <div class="row gy-4 align-items-start">
                    <!-- Product List -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="services-list">
                            @foreach ($result['products'] as $product)
                                <a class="{{ request()->routeIs('product.details') && request()->route('id') == $product->id ? 'active' : '' }}"
                                    href="{{ route('product.details', $product->id) }}">
                                    {{ $product->title ?? '' }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="img-scale-animation mb-4">
                            <img src="{{ App\Helpers\Image::getMediaUrl($result['product'], 'products') }}"
                                alt="{{ $result['product']->title ?? '' }}" class="img-fluid" loading="lazy">
                        </div>
                        <h3 style="font-size: 1.8rem; font-weight: bold; color: var(--secondary-color);">
                            {{ $result['product']->title ?? '' }}
                        </h3>
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-color);">
                            {{ $result['product']->description ?? '' }}
                        </p>
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-color);">
                            {{ $result['product']->content ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Product Details Section -->

    </main>
@endsection

@section('js')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
@endsection
