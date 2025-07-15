@extends('web.layouts.app')
@section('title', __('attributes.services_details'))
@section('class', 'service-details-page')
@section('header_class', 'header d-flex align-items-center position-relative')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>{{__('attributes.services_details')}}</h1>
                            {{-- <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                                voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                                Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">{{__('attributes.home')}}</a></li>
                        <li class="current">{{__('attributes.services_details')}}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-box">
                            <h4>Serices List</h4>
                            <div class="services-list">
                                @foreach ($result['services'] as $service)
                                    <a class="{{ request()->routeIs('services.details') && request()->route('id') == $service->id ? 'active' : '' }}"
                                        href="{{ route('services.details', $service->id) }}"><i
                                            class="bi bi-arrow-right-circle"></i><span>{{ $service->title ?? '' }}</span></a>
                                @endforeach
                            </div>
                        </div><!-- End Services List -->

                        {{-- <div class="service-box">
                            <h4>Download Catalog</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                            </div>
                        </div> --}}
                        <!-- End Services List -->

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Have a Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i>
                                <span>{{ setting('phone') }}</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:contact@example.com">{{ setting('email') }}</a></p>
                        </div>

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ App\Helpers\Image::getMediaUrl($servicesDetails, 'services') }}" alt=""
                            class="img-fluid services-img">
                        <h3>{{ $servicesDetails->title ?? '' }}
                        </h3>
                        <p>
                            {{ $servicesDetails->description ?? '' }}
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
@endsection
