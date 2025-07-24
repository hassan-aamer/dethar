@extends('admin.layouts.master')
@section('title', __('attributes.settings'))
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('attributes.settings') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST"
                                action="{{ isset($result) && $result->id ? route('admin.settings.update', $result->id) : route('admin.settings.store') }}"
                                class="parsley-examples" enctype="multipart/form-data">
                                @csrf
                                @if (isset($result) && $result->id)
                                    @method('PUT')
                                @endif
                                <div class="row">
                                    @include('admin.components.name')
                                    @include('admin.components.title')
                                    @include('admin.components.description')
                                    @include('admin.components.email')
                                    @include('admin.components.phone')
                                    @include('admin.components.whatsapp')
                                    @include('admin.components.facebook')
                                    @include('admin.components.twitter')
                                    @include('admin.components.youtube')
                                    @include('admin.components.linkedIn')
                                    @include('admin.components.instagram')
                                    @include('admin.components.copyrights')
                                    @include('admin.components.address')
                                    @include('admin.components.about')

                                    {{-- @foreach (config('app.locales') as $locale)
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">@lang('attributes.vision')
                                                    ({{ __('attributes.' . $locale) }})
                                                </label>
                                                <textarea required name="vision[{{ $locale }}]" id="vision_{{ $locale }}"
                                                    class="form-control @error('vision.' . $locale) is-invalid @enderror">{{ old('vision.' . $locale, isset($result) ? $result->getTranslation('vision', $locale) : '') }}</textarea>
                                                @error('vision.' . $locale)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('app.locales') as $locale)
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">@lang('attributes.mission')
                                                    ({{ __('attributes.' . $locale) }})
                                                </label>
                                                <textarea required name="mission[{{ $locale }}]" id="mission_{{ $locale }}"
                                                    class="form-control @error('mission.' . $locale) is-invalid @enderror">{{ old('mission.' . $locale, isset($result) ? $result->getTranslation('mission', $locale) : '') }}</textarea>
                                                @error('mission.' . $locale)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach --}}
                                    @include('admin.components.map')
                                    <div class="row">
                                        @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'baners',
                                            'label' => 'Baner',
                                            'name' => 'baner',
                                        ])
                                        @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'about',
                                            'label' => 'about',
                                        ])
                                        {{-- @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'callToActions',
                                            'label' => 'Call to action',
                                            'name' => 'callToAction',
                                        ])
                                        @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'reviews',
                                            'label' => 'Reviews',
                                            'name' => 'review',
                                        ]) --}}
                                        @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'logo',
                                            'label' => 'logo',
                                            'name' => 'logo',
                                        ])
                                        @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'vision',
                                            'label' => 'vision',
                                            'name' => 'vision',
                                        ])
                                        @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'mission',
                                            'label' => 'mission',
                                            'name' => 'mission',
                                        ])
                                        @include('admin.components.submit')
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
