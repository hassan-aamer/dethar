@extends('admin.layouts.master')
@section('title', __('attributes.pages'))
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ __('attributes.pages') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST"
                                action="{{ isset($result) && $result->id ? route('admin.pages.update', $result->id) : route('admin.pages.store') }}"
                                class="parsley-examples" enctype="multipart/form-data">
                                @csrf
                                @if (isset($result) && $result->id)
                                    @method('PUT')
                                @endif
                                <div class="row">
                                    @if (!optional($result)->id)
                                        @include('admin.components.name')
                                    @endif

                                    @include('admin.components.title')
                                    @include('admin.components.description')
                                    @if (isset($result) && $result->name == 'about')
                                        @include('admin.components.content')
                                    @endif
                                    @include('admin.components.ImageUpload', [
                                        'result' => $result ?? null,
                                        'collection' => 'pages',
                                    ])
                                    @if (isset($result) && $result->name == 'about')
                                        @include('admin.components.ImageUpload', [
                                            'result' => $result ?? null,
                                            'collection' => 'about',
                                            'name' => 'about',
                                        ])
                                    @endif
                                    @include('admin.components.position')
                                    {{-- @include('admin.components.active') --}}
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
