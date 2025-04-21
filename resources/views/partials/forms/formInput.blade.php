@php
if(!isset($value)) $value = old($name);
@endphp
<div class="{{ $class ?? "col-md-12" }}">
    <div class="form-group row">
        <div class="col-sm-6 col-form-label">
            <label for="{{ $name }}">{{ $label }} </label>
        </div>
        <div class="col-sm-12">
            <input type="{{ $type ?? "text" }}" id="Category Name"
                   class="form-control @error($name) is-invalid @enderror"
                   name="{{ $name }}"
                   value="{{ $value }} "
                   placeholder="{{ $placeholder ?? " " }}" {{ $required ?? "" }}/>
            @error($name)
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
