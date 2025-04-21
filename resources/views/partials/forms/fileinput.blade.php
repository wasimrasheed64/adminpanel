{{--@include('partials.forms.fileinput',[--}}
{{--                                "name" => "image",--}}
{{--                                "label" => "Breadcrumb image",--}}
{{--                                 "class" => "col-md-6",--}}
{{--                                 "id" => "breadcrumbImage",--}}
{{--                                 "function" => "1",--}}
{{--                                 "required" => "disabled"--}}
{{--                                 ])--}}

<div class="{{ $class ?? "col-md-12" }}">
    <div class="form-group row">
        <div class="col-sm-6 col-form-label">
            <label for="{{ $name }}">{{ $label }}
                @if(isset($note))
                <i data-feather='help-circle' data-toggle="tooltip"
                   data-placement="top"
                   title="{{ $note }}"
                ></i>
                @endif
            </label>
        </div>
        <div class="col-sm-12">

            <input type="file"
                   @if(isset($function)) onchange="uploadImage('{{$id}}','{{$uploadId ?? "#upload-img" }}')" @endif
                   class="form-control @error($name) is-invalid @enderror"
                   id="{{ $id  ?? 'files' }}" name="{{  isset($multiple) ? $name.'[]' : $name}}" {{ $multiple ?? "" }}
                    {{ $required ?? "" }}/>

            @error($name)
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
