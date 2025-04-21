@php
    if(!isset($value)) $value = old($name);
@endphp
<div class="{{ $class ?? "col-md-12" }}">
    <div class="form-group row">
        <div class="col-sm-6 col-form-label">
            <label for="{{ $name }}">{{ $label }}</label>
        </div>
        <div class="col-sm-12">
            <select name="{{ $name }}"
                    class="form-control @error($name) is-invalid @enderror">
                <option value="0" class="d-none">{{ $placeholder }}</option>
                @foreach ($options as $option)
                    <option
                        @if ($option->id == $value)
                        selected
                        @endif
                        value="{{ $option->id }}"> {{ $option->name }}   </option>
                @endforeach
            </select>
            @error($name)
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
