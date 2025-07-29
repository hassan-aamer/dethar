@extends('web.layouts.app')
@section('title', __('attributes.product_details'))
@section('css')

@endsection
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ page_image('product details') }});">
            <div class="container position-relative">
                <h1>{{ page('product details', 'title') }}</h1>
                <p>{{ page('product details', 'description') }}</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('product details', 'title') }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="services-list">
                            @foreach ($result['products'] as $product)
                                <a class="{{ request()->routeIs('product.details') && request()->route('id') == $product->id ? 'active' : '' }}"
                                    href="{{ route('product.details', $product->id) }}">{{ $product->title ?? '' }}</a>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl($result['product'], 'products') }}" alt=""
                            class="img-fluid services-img" loading="lazy">
                        <h3>
                            {{ $result['product']->title ?? '' }}
                        </h3>
                        <p>
                            {{ $result['product']->description ?? '' }}
                        </p>
                        <p>
                            {{ $result['product']->content ?? '' }}
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
@endsection
@section('js')

@endsection
