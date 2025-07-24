@extends('web.layouts.app')
@section('title', __('attributes.technical_data_sheets'))
@section('css')

@endsection
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ page_image('tds') }});">
            <div class="container position-relative">
                <h1>{{ page('tds', 'title') }}</h1>
                <p>
                    {!! nl2br(e(page('tds', 'description'))) !!}
                    {{-- {{ page('tds', 'description') }} --}}
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">{{ page('tds', 'title') }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->


        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>{{ page('tds', 'title') }}</span>
                <h2>{{ page('tds', 'title') }}</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-container">

                            @foreach ($result as $item)
                                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                    <i class="faq-icon bi bi-file-earmark-pdf"></i>
                                    <h3>{{ $item->title ?? '' }}</h3>
                                    <div class="faq-content">
                                        <p>{{ $item->description ?? '' }}</p>
                                        <a href="{{ App\Helpers\Image::getMediaUrl($item, 'technical_data_sheets') }}" class="btn btn-primary">Download</a>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@section('js')

@endsection
