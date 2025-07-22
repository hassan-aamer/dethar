@extends('admin.layouts.master')
@section('title', __('attributes.what_we_do'))
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('attributes.what_we_do') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST"
                                action="{{ isset($result) && $result->id ? route('admin.what_we_do.update', $result->id) : route('admin.what_we_do.store') }}"
                                class="parsley-examples" enctype="multipart/form-data">
                                @csrf
                                @if (isset($result) && $result->id)
                                    @method('PUT')
                                @endif
                                <div class="row">
                                    @include('admin.components.title')
                                    @include('admin.components.description')
                                    @include('admin.components.content')
                                    @include('admin.components.position')
                                    <div class="col-xl-6 col-sm-4">
                                        <div class="mb-3 mt-3 mt-sm-0">
                                            <label class="form-label">{{ __('attributes.categories') }}</label>
                                            <select name="what_we_do_category_id" data-plugin="customselect"
                                                class="form-select @error('what_we_do_category_id') is-invalid @enderror"
                                                data-placeholder="{{ __('attributes.categories') }}">
                                                <option></option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('what_we_do_category_id', isset($result) && $result->what_we_do_category_id == $category->id ? 'selected' : '') }}>
                                                        {{ $category->title ?? '' }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('what_we_do_category_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    @include('admin.components.ImageUpload', [
                                        'result' => $result ?? null,
                                        'collection' => 'products',
                                    ])
                                    {{-- @if (isset($result) && $result->id)
                                        @include('admin.components.ImagesUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'product_collection',
                                            'name' => 'images',
                                        ])
                                    @endif --}}
                                    @include('admin.components.active')
                                    @include('admin.components.submit')
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
