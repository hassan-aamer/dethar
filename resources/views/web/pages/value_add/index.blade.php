@extends('web.layouts.app')
@section('title', __('attributes.value_add'))
@section('css')

@endsection
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ page_image('value add') }});">
            <div class="container position-relative">
                <h1>{{ page('value add', 'title') }}</h1>
                <p>
                    {!! nl2br(e(page('value add', 'description'))) !!}
                    {{-- {{ page('value add', 'description') }} --}}
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('value add', 'title') }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>{{ page('value add', 'title') }}<br></span>
                <h2>{{ page('value add', 'title') }}</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">

                    @foreach ($result as $item)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ App\Helpers\Image::getMediaUrl($item, 'value_add') }}" alt=""
                                        class="img-fluid">
                                </div>
                                <h3><a href="#" class="stretched-link">{{ $item->title ?? '' }}</a></h3>
                                <p>{{ $item->description ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </section>
        <!-- /Services Section -->
    </main>
@endsection
@section('js')

@endsection
