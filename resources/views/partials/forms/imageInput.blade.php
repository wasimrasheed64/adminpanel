<!--begin::Input group-->
{{--@include('partials.forms.imageInput',[--}}
{{--                              "name" => 'breadcrumb_image',--}}
{{--                              "label" => "Banner Image",--}}
{{--                              "class" => "col-md-6"--}}
{{--                          ]);--}}
    <!--begin::Col-->
    <div class="{{ $class }}">
        <!--begin::Image input-->
        <div class="image-input image-input-outline" data-kt-image-input="true"
             style="background-image: url('{{ $value ?? '' }}')">
            <!--begin::Preview existing avatar-->
            <div class="image-input-wrapper w-125px h-125px"
                 style="background-image: url('{{ $value ?? '' }}')"></div>
            <!--end::Preview existing avatar-->
            <!--begin::Label-->
            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change {{ $label }}">
                <i class="bi bi-pencil-fill fs-7"></i>
                <!--begin::Inputs-->
                <input type="file" name="{{ $name }}" accept=".png, .jpg, .jpeg,.webp" />
                <input type="hidden" name="{{$name}}_remove" />
                <!--end::Inputs-->
            </label>
            <!--end::Label-->
            <!--begin::Cancel-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel {{ $label }}">
																<i class="bi bi-x fs-2"></i>
															</span>
            <!--end::Cancel-->
            <!--begin::Remove-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove {{ $label }}">
																<i class="bi bi-x fs-2"></i>
															</span>
            <!--end::Remove-->
        </div>
        <!--end::Image input-->
        <!--begin::Hint-->

        <div class="form-text">
                <span class="text-dark">   {{ $label }}</span>
            <br>
            Allowed file types: png, jpg, jpeg, webp.
        </div>
        <!--end::Hint-->
    </div>
    <!--end::Col-->

<!--end::Input group-->
