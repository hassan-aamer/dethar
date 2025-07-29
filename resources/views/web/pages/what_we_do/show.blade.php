@extends('web.layouts.app')
@section('title', __('attributes.blogs'))
@section('css')

@endsection
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ page_image('what we do details') }});">
            <div class="container position-relative">
                <h1>{{ page('what we do details', 'title') }}</h1>
                <p>{{ page('what we do details', 'description') }}</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('what we do details', 'title') }}</li>
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
                            @foreach ($result['what_we_dos'] as $what_we_do)
                                <a class="{{ request()->routeIs('what.details') && request()->route('id') == $what_we_do->id ? 'active' : '' }}"
                                    href="{{ route('what.details', $what_we_do->id) }}">{{ $what_we_do->title ?? '' }}</a>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl($result['what_we_do'], 'what_we_do') }}" alt=""
                            class="img-fluid services-img" loading="lazy">
                        <h3>
                            {{ $result['what_we_do']->title ?? '' }}
                        </h3>
                        <p>
                            {{ $result['what_we_do']->description ?? '' }}
                        </p>
                        <p>
                            {{ $result['what_we_do']->content ?? '' }}
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
@endsection
@section('js')

@endsection
