@php
    if(!isset($value)) $value = old($name);
@endphp
<div class="{{ $class ?? "col-md-11" }} ml-2">
    <div class="form-group row">
        <div class="custom-control custom-switch custom-control-inline">
            <input type="checkbox"    name="{{ $name }}"
                   @if($value ==  1)
                       checked
                       @endif
                   class="custom-control-input"  id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">{{ $label }}</label>
        </div>
            @error($name)
            <span class="text-danger">{{ $message }}</span>
            @enderror
    </div>
</div>
