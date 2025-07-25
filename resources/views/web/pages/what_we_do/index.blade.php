@extends('web.layouts.app')
@section('title', __('attributes.what_we_do'))
@section('css')

@endsection
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ page_image('what we do') }});">
            <div class="container position-relative">
                <h1>{{ page('what we do', 'title') }}</h1>
                <p>
                    {!! nl2br(e(page('what we do', 'description'))) !!}
                    {{-- {{ page('our products', 'description') }} --}}
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('what we do', 'title') }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>{{ page('what we do', 'title') }}<br></span>
                <h2>{{ page('what we do', 'title') }}</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">

                    @foreach ($result as $item)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ App\Helpers\Image::getMediaUrl($item, 'what_we_do') }}" alt=""
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
