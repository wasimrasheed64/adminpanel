@php
    if(!isset($value)) $value = old($name);
@endphp
<div class="col-12">
    <div class="form-group row">
        <div class="col-sm-6 col-form-label">
            <label for="{{ $name }}">{{ $label }} *</label>
        </div>
        <div class="col-sm-12">
         <textarea rows="{{ $row ?? 5 }}" id="{{$id ?? ""  }}" class="{{ $class ?? "" }} form-control @error($name) is-invalid @enderror" name="{{ $name }}"
         > {!!  $value !!}
         </textarea>
            @error($name)
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
