@extends('web.layouts.app')
@section('title', __('attributes.blogs'))
@section('css')

@endsection
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ page_image('blog details') }});">
            <div class="container position-relative">
                <h1>{{ page('blog details', 'title') }}</h1>
                <p>{{ page('blog details', 'description') }}</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('blog details', 'title') }}</li>
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
                            @foreach ($result['blogs'] as $blog)
                                <a class="{{ request()->routeIs('blog.details') && request()->route('id') == $blog->id ? 'active' : '' }}"
                                    href="{{ route('blog.details', $blog->id) }}">{{ $blog->title ?? '' }}</a>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl($result['blog'], 'blogs') }}" alt=""
                            class="img-fluid services-img" loading="lazy">
                        <h3>
                            {{ $result['blog']->title ?? '' }}
                        </h3>
                        <p>
                            {{ $result['blog']->description ?? '' }}
                        </p>
                        <p>
                            {{ $result['blog']->content ?? '' }}
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
@endsection
@section('js')

@endsection
