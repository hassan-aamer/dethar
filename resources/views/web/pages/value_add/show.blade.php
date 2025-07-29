@extends('web.layouts.app')
@section('title', __('attributes.value_add'))
@section('css')

@endsection
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ page_image('value add details') }});">
            <div class="container position-relative">
                <h1>{{ page('value add details', 'title') }}</h1>
                <p>{{ page('value add details', 'description') }}</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('value add details', 'title') }}</li>
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
                            @foreach ($result['value_adds'] as $value_add)
                                <a class="{{ request()->routeIs('value.details') && request()->route('id') == $value_add->id ? 'active' : '' }}"
                                    href="{{ route('value.details', $value_add->id) }}">{{ $value_add->title ?? '' }}</a>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl($result['value_add'], 'value_add') }}" alt=""
                            class="img-fluid services-img" loading="lazy">
                        <h3>
                            {{ $result['value_add']->title ?? '' }}
                        </h3>
                        <p>
                            {{ $result['value_add']->description ?? '' }}
                        </p>
                        <p>
                            {{ $result['value_add']->content ?? '' }}
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
@endsection
@section('js')

@endsection
