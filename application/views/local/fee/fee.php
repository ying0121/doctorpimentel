<div class="row my-3 p-10 bg-white border rounded">
    <div class="col-12 mb-4 d-flex justify-content-between align-items-center my-5">
        <div class="d-flex justify-content-start align-items-center">
            <h3 class="m-0 mr-5">Clinic Fees</h3>
            <div class="d-flex justify-content-start align-items-center">
                <select class="form-control mr-5" id="fee_category_filter">
                </select>
                <select class="form-control" id="fee_language_filter">
                </select>
            </div>
        </div>
        <div class='btn btn-light-primary btn-icon' id="fee_add"><i class='fa fa-plus'></i></div>
    </div>
    <div class="row w-100">
        <div class="col-12">
            <table class="table w-100" id="fee_table">
                <thead>
                    <th>Order</th>
                    <th>Title</th>
                    <th>Key</th>
                    <th>Short Description</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Status</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="fee_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Clinic Fee</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <input type="hidden" id="fee_modal_type" />
            <input type="hidden" id="fee_chosen_id" />
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <h6 class="mb-3">Key <span class="text-danger">*</span></h6>
                            <input id="fee_key" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <h6 class="mb-3">Order <span class="text-danger"></span></h6>
                            <input id="fee_order" class="form-control" type="number" min="0" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6>Language</h6>
                            <select class="form-control" id="fee_language">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6>Category</h6>
                            <select class="form-control" id="fee_category">
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <h6 class="mb-3">Title <span class="text-danger">*</span></h6>
                            <input id="fee_title" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <h6 class="mb-3">Short Description</h6>
                            <div class="fee_summernote" id="fee_short_desc"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <h6 class="mb-3">Long Description</h6>
                            <div class="fee_summernote" id="fee_long_desc"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6>Status</h6>
                            <select class="form-control" id="fee_status">
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h6 class="mb-3">Cost <span class="text-danger"></span></h6>
                            <input id="fee_cost" class="form-control" type="number" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="d-flex align-items-center mb-5">
                            <div class="d-flex align-items-center"><input type="checkbox" id="fee_request" style="width:24px; height:24px;"></div>
                            <div class="mr-1 fs-2">&nbsp;Request Services</div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="d-flex align-items-center"><input type="checkbox" id="fee_payment" style="width:24px; height:24px;"></div>
                            <div class="mr-1 fs-2">&nbsp;Online Payment</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center"><input type="checkbox" id="fee_home" style="width:24px; height:24px;"></div>
                            <div class="mr-1 fs-2">&nbsp;Home Page</div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="form-group mb-5">
                            <h6 class="mb-3">Fee Price <span class="text-danger"></span></h6>
                            <input id="fee_price" class="form-control" type="number" min="0.01" step="0.01" />
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center"><input type="checkbox" id="show_in_fee" style="width:24px; height:24px;"></div>
                            <div class="mr-1 fs-2">&nbsp;Show in Fees</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary" id="fee_save_btn">Save</button>
                <button type="button" class="btn btn-light-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="fee_file_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="fee_file_modal_title">Upload File</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <input type="hidden" id="fee_file_modal_type" />
            <input type="hidden" id="fee_file_chosen_id" />
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h6 class=" mb-3" id="fee_file_modal_label">File URL</h6>
                        <div class="custom-file form-group mb-5">
                            <input type="file" accept="*.*" class="custom-file-input" id="fee_file" name="fee_file">
                            <label class="custom-file-label" for="fee_file">File URL</label>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center align-items-center"
                        id="progress-wrapper-file">
                        <progress class="w-100 mr-3" id="progressbar-file" value="0" max="100" style="height: 21px;"></progress>
                        <span id="progress-percentage-file">0%</span>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary" id="fee_file_save_btn">Upload</button>
                <button type="button" class="btn btn-light-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(async function() {
        $('.fee_summernote').summernote({
            tabsize: 1,
            height: 150,
        });

        // language
        $.ajax({
            url: '<?php echo base_url() ?>' + 'local/Language/getAll',
            method: "POST",
            dataType: "json",
            success: function(data) {
                const result = data.data
                let html = ""
                let filter_html = ""
                result.forEach(item => {
                    if (item.English) {
                        if (item.code == 'en') {
                            html += `<option value="${item.id}" selected>${item.English}</option>`
                        } else {
                            html += `<option value="${item.id}">${item.English}</option>`
                        }
                        filter_html += `<option value="${item.id}">${item.English}</option>`
                    }
                })
                $("#fee_language").html(html)
                $("#fee_language_filter").html("<option value='0'>All Languages</option>" + filter_html)
            }
        })
        // service category
        $.ajax({
            url: '<?php echo base_url() ?>' + 'local/Services/getServiceCategory',
            method: "POST",
            dataType: "json",
            success: function(data) {
                const result = data.data
                let html = ""
                result.forEach(item => {
                    html += `<option value="${item.id}">${item.name}</option>`
                })
                $("#fee_category").html(html)
                $("#fee_category_filter").html("<option value='0'>All Categories</option>" + html)
            }
        })

        const fee_table = $("#fee_table").DataTable({
            "pagingType": "full_numbers",
            "processing": true,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "order": [
                [0, 'asc']
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            "ajax": {
                "url": '<?php echo base_url() ?>' + 'local/Fees/getClinicFee',
                "type": "POST",
                "data": function(data) {
                    data.category = $("#fee_category_filter").val() ? $("#fee_category_filter").val() : 0
                    data.language = $("#fee_language_filter").val() ? $("#fee_language_filter").val() : 0
                }
            },
            "columns": [{
                data: 'order'
            }, {
                data: 'title'
            }, {
                data: 'key'
            }, {
                data: 'short_desc'
            }, {
                data: 'image',
                render: function(data, type, row) {
                    return row.image ? `<img src="<?php echo base_url() ?>assets/service/image/${row.image}" width="140px" />` : ""
                }
            }, {
                data: 'video',
                render: function(data, type, row) {
                    return row.video ? `<a href="<?php echo base_url() ?>assets/service/video/${row.video}" class="text-primary" target="_blank">${row.video}</a>` : ""
                }
            }, {
                data: 'status',
                render: function(data, type, row) {
                    if (row.status == 1)
                        return `<div class="text-success">Active</div>`
                    else
                        return `<div class="text-danger">Inactive</div>`
                }
            }, {
                data: 'id',
                render: function(data, type, row) {
                    return `<div idkey="${row.id}">
                                <span class="btn btn-icon btn-sm btn-light-warning fee_edit"><i class="fas fa-edit"></i></span>
                                <span class="btn btn-icon btn-sm btn-light-primary fee_image"><i class="fas fa-image"></i></span>
                                <span class="btn btn-icon btn-sm btn-light-success fee_video"><i class="fas fa-video"></i></span>
                                <span class="btn btn-icon btn-sm btn-light-danger fee_delete"><i class="fas fa-trash"></i></span>
                            </div>`
                }
            }]
        })

        $("#fee_add").click(function() {
            $("#fee_modal_type").val("0")
            $("#fee_title").val("")
            $("#fee_key").val("")
            $("#fee_short_desc").val("")
            $("#fee_long_desc").val("")
            $("#fee_image").val("")
            $("#fee_video").val("")
            $("#fee_cost").val("")
            $("#fee_modal").modal("show")
        })

        $("#fee_save_btn").click(function() {
            const type = $("#fee_modal_type").val()

            const entry = {
                id: $("#fee_chosen_id").val(),
                key: $("#fee_key").val(),
                order: $("#fee_order").val() ? $("#fee_order").val() : 9999,
                language: $("#fee_language").val(),
                category: $("#fee_category").val(),
                title: $("#fee_title").val(),
                short_desc: $("#fee_short_desc").summernote('code'),
                long_desc: $("#fee_long_desc").summernote('code'),
                status: $("#fee_status").val(),
                request_service: $("#fee_request").prop("checked") == true ? 1 : 0,
                online_payment: $("#fee_payment").prop("checked") == true ? 1 : 0,
                home_page: $("#fee_home").prop("checked") == true ? 1 : 0,
                cost: $("#fee_cost").val(),
                show_in_fee: $("#show_in_fee").prop("checked") == true ? 1 : 0,
                fee: $("#fee_price").val()
            }

            if (!entry.title) {
                toastr.info("Please enter title!")
                return
            }
            if (!entry.key) {
                toastr.info("Please enter key!")
                return
            }

            $.ajax({
                url: '<?php echo base_url() ?>' + `local/Fees/${type == 0 ? "addClinicFee" : "updateClinicFee"}`,
                method: "POST",
                data: entry,
                dataType: "text",
                success: function(data) {
                    if (data == "ok") {
                        toastr.success("Saved Successfully!");
                        fee_table.ajax.reload();
                    }
                    $("#fee_modal").modal("hide")
                }
            });
        })

        $("#fee_file_save_btn").click(function() {
            var fd = new FormData();

            const type = $("#fee_file_modal_type").val()

            var fee_file = $('#fee_file')[0].files;

            let w, h
            if (fee_file.length > 0) {
                if (type == 'image') {
                    const reader = new FileReader()
                    reader.onload = function(e) {
                        const img = new Image()
                        img.src = e.target.result

                        img.onload = function() {
                            w = img.width
                            h = img.height
                        }
                    }
                    reader.readAsDataURL(fee_file[0])
                }

                fd.append("file", fee_file[0]);
            } else {
                toastr.info("Please select a file");
                return
            }
            setTimeout(function() {
                if (type == 'image') {
                    if (w > 1024 || w > 768) {
                        toastr.info("This image is too large.")
                        return;
                    }
                }
                fd.append("id", $("#fee_file_chosen_id").val());
                fd.append("type", type);

                $("#fee_file_save_btn").prop("disabled", true);
                $.ajax({
                    xhr: function() {
                        let xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(event) {
                            if (event.lengthComputable) {
                                let percentComplete = event.loaded / event.total * 100;
                                $('#progressbar-file').val(percentComplete);
                                $('#progress-percentage-file').text(Math.round(percentComplete) + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    url: '<?php echo base_url() ?>' + `local/Services/uploadServiceFile`,
                    method: "POST",
                    contentType: false,
                    processData: false,
                    data: fd,
                    dataType: "text",
                    success: function(data) {
                        if (data == "ok") {
                            toastr.success("Saved Successfully!");
                            fee_table.ajax.reload();
                            $("#fee_file_modal").modal("hide")
                        } else {
                            toastr.warning("Upload Failed!");
                        }
                        $("#fee_file_save_btn").prop("disabled", false);
                    },
                    error: function(error) {
                        if (error) {
                            toastr.error(error.statusText);
                        } else {
                            toastr.error("Error!");
                        }
                        $("#fee_file_save_btn").prop("disabled", false);
                    }
                });
            }, 1000)
        })

        $(document).on("click", ".fee_edit", function() {
            const id = $(this).parent().attr("idkey")
            $("#fee_chosen_id").val(id)
            $("#fee_modal_type").val("1")

            $.ajax({
                url: '<?php echo base_url() ?>' + 'local/Fees/chosenClinicFee',
                method: "POST",
                data: {
                    id: id
                },
                dataType: "json",
                success: function(data) {
                    const result = data.data
                    $("#fee_key").val(result.key)
                    $("#fee_order").val(result.order)
                    $("#fee_category").val(result.category)
                    $("#fee_language").val(result.language)
                    $("#fee_title").val(result.title)
                    $("#fee_short_desc").summernote("code", result.short_desc)
                    $("#fee_long_desc").summernote("code", result.long_desc)
                    $("#fee_status").val(result.status)
                    $("#fee_request").prop("checked", result.request_service == 0 ? false : true)
                    $("#fee_payment").prop("checked", result.online_payment == 0 ? false : true)
                    $("#fee_home").prop("checked", result.home_page == 0 ? false : true)
                    $("#fee_cost").val(result.cost)
                    $("#show_in_fee").prop("checked", result.show_in_fee == 0 ? false : true)
                    $("#fee_price").val(result.fee)

                    $("#fee_modal").modal("show")
                }
            })
        })

        $(document).on("click", ".fee_image", function() {
            const id = $(this).parent().attr("idkey")
            $("#fee_file_chosen_id").val(id)
            $("#fee_file_modal_type").val("image")
            $("#fee_file").prop("accept", "image/*")
            $("#fee_file_modal_title").text("Upload Image (400 * 267)")
            $("#fee_file_modal_label").text("Please select an image")

            $('#progressbar-file').val(0);
            $('#progress-percentage-file').text(Math.round(0) + '%');

            $("#fee_file_modal").modal("show")
        })

        $(document).on("click", ".fee_video", function() {
            const id = $(this).parent().attr("idkey")
            $("#fee_file_chosen_id").val(id)
            $("#fee_file_modal_type").val("video")
            $("#fee_file").prop("accept", "video/*")
            $("#fee_file_modal_title").text("Upload Video")
            $("#fee_file_modal_label").text("Please select a video")

            $('#progressbar-file').val(0);
            $('#progress-percentage-file').text(Math.round(0) + '%');

            $("#fee_file_modal").modal("show")
        })

        $(document).on("click", ".fee_delete", function() {
            const id = $(this).parent().attr("idkey")
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '<?php echo base_url() ?>' + 'local/Fees/deleteClinicFee',
                        method: "POST",
                        data: {
                            id: id
                        },
                        dataType: "text",
                        success: function(data) {
                            if (data == "ok") {
                                toastr.success("Deleted Successfully!")
                                fee_table.ajax.reload()
                            }
                        }
                    })
                }
            });
        })

        // filters
        $(document).on('change', "#fee_category_filter", function() {
            fee_table.ajax.reload()
        })

        $(document).on('change', "#fee_language_filter", function() {
            fee_table.ajax.reload()
        })
    })
</script>