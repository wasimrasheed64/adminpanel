<div class="mb-5">
    <label class="required fs-6 fw-bold mb-2" for="{{ $name }}">{{ $label }} </label>
    <input type="{{ $type }}" id="{{ $name }}"
           class="form-control mb-2 form-control-solid @error($name) is-invalid border-danger @enderror"
           name="{{ $name }}"
           value="{{ $value }}"
           placeholder="{{ $placeholder ?? " " }}"/>
    @error($name)
        <span class="text-danger mt-2">{{ $message }}</span>
    @enderror
</div>

