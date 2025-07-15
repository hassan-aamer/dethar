<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label" for="icon_class">@lang('attributes.icon_class')</label>
        <input type="text" name="icon_class" parsley-trigger="change" placeholder="@lang('attributes.icon_class')"
            class="form-control @error('icon_class') is-invalid @enderror"
            value="{{ old('icon_class', isset($result) ? $result->icon_class : '') }}">
        @error('icon_class')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
