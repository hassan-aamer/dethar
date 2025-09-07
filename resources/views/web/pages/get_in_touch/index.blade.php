@extends('web.layouts.app')
@section('title', __('attributes.get_in_touch'))
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

        <!-- Page Title -->



        <section id="hero" class="hero section dark-background">
            <img src="{{ page_image('get in touch') }}" alt="" class="hero-bg d-none d-md-block"
                data-aos="fade-in" loading="lazy">
            <img src="{{ page_image('get in touch') }}" alt="" class="hero-bg d-block d-md-none"
                data-aos="fade-in" loading="lazy">

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>{{ page('get in touch', 'title') }}</h1>
                        <p>{{ page('get in touch', 'description') }}</p>
                        <nav class="breadcrumbs">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ page('get in touch', 'title') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 270px;" src="{{ setting('map') ?? '' }}" frameborder="0"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ setting('address') ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ setting('phone') ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ setting('email') ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name"
                                        style="background-color: #EDE4D9;border-color: #EA9323;"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                                        required="">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        style="background-color: #EDE4D9;border-color: #EA9323;" name="email"
                                        placeholder="Your Email" required="">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        style="background-color: #EDE4D9;border-color: #EA9323;" name="phone"
                                        placeholder="phone" required="">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                        style="background-color: #EDE4D9;border-color: #EA9323;" name="company_name"
                                        placeholder="company name" required="">
                                    @error('company_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6"
                                        style="background-color: #EDE4D9;border-color: #EA9323;" placeholder="Message" required=""></textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit"
                                        style="color: var(--contrast-color);background: #EA9323;border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 4px;">SendMessage</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

@endsection
