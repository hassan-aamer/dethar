@props([
 'result' => null,
    'collection' => 'default',
    'name' => 'file',
    'label' => __('attributes.file'),
])
<div class="col-md-6">
    <div class="mb-3">
        <div class="mb-3 mt-3 mt-sm-0">

            <label class="form-label" for="example-fileinput">{{ $label }}</label>

            @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <input type="file" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
                id="example-fileinput">
        </div>
    </div>
</div>
