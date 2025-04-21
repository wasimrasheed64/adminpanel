<!-- BEGIN: Vendor JS-->
<!--end::Main-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{URL::to('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{URL::to('assets/js/scripts.bundle.js')}}"></script>
<script src="{{URL::to('assets/js/sweetalert.min.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{URL::to('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{URL::to('assets/js/custom/widgets.js')}}"></script>
<script src="{{URL::to('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{URL::to('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{URL::to('assets/js/custom/modals/upgrade-plan.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function deleteData(id, route) {
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        swal({
            title: "Are you Sure",
            text: "You want to delete?",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        }).then(isConfirm => {
            if (isConfirm) {

                $.ajax({
                    url: route,
                    type: 'delete',
                    data: {
                        id: id,
                        _token: CSRF_TOKEN,
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        if (data.status === 200) {
                            swal(data.message || 'It is deleted', {
                                icon: "success",
                            });
                            location.reload();
                        }
                        if (data.status === 500) {
                            swal(data.message || 'Something went wrong', {
                                icon: "error",
                            });
                            // location.reload();
                        }
                        if (data.status === -1) {
                            swal("Cancelled", "It's safe.", "error");
                        }
                    },
                });
            } else {
                swal("Cancelled", "It's safe.", "error");
            }
        });
    }

    function switchDarkMode() {
        $.ajax({
            url: '../../admin/dark-mode',
            type: 'post',
            success: function (data) {
                location.reload();
            }
        });
    }

    function uploadImage(uploadButton,uploadImg) {
        debugger
        accountUploadImg = $(uploadImg);
        var reader = new FileReader();
        reader.readAsDataURL(document.getElementById(uploadButton).files[0]);
        reader.onload = function(oFREvent)  {
            if (accountUploadImg) {
                accountUploadImg.attr('src', oFREvent.target.result);
            }
        };
        accountUploadImg.removeClass('d-none')
    }
</script>

<!--end::Page Custom Javascript-->

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
@yield('vendor-scripts')

@yield('extra-scripts')
<!-- END: Page JS-->


