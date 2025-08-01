@extends('web.layouts.app')
@section('title', __('attributes.get_in_touch'))
@section('css')
    <style>
        .dark-background::before {
            /* background-color: transparent !important; */
            /* background-color: rgba(0, 0, 0, 0.1); */
        }
    </style>
@endsection
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ page_image('get in touch') }});">


            <div class="container position-relative">
                <h1>{{ page('get in touch', 'title') }}</h1>
                <p>
                    {{-- {{ page('get in touch', 'description') }} --}}
                    {!! nl2br(e(page('get in touch', 'description'))) !!}
                </p>

                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('get in touch', 'title') }}</li>
                    </ol>
                </nav>

            </div>
        </div>
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
                        <form action="{{ route('contact.store') }}" method="post" >
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" style="background-color: #EDE4D9;border-color: #EA9323;"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                                        required="">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" style="background-color: #EDE4D9;border-color: #EA9323;"
                                        name="email" placeholder="Your Email" required="">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" style="background-color: #EDE4D9;border-color: #EA9323;"
                                        name="phone" placeholder="phone" required="">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6" style="background-color: #EDE4D9;border-color: #EA9323;"
                                        placeholder="Message" required=""></textarea>
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
