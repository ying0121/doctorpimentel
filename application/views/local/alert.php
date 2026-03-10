<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('local/header'); ?>
    <style>
        .alert-image-preview-wrapper {
            max-width: 100%;
            border: 1px solid #e2e5e8;
            border-radius: 4px;
            padding: 8px;
            background: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .alert-image-preview {
            max-width: 100%;
            max-height: 280px;
            display: block;
            object-fit: contain;
        }
        /* Alert preview popup - landing page style */
        .alert-preview-popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: transparent;
            z-index: 1040;
        }
        .alert-preview-popuptext {
            visibility: hidden;
            min-width: 360px;
            max-width: 560px;
            background: #fff;
            color: #333;
            text-align: left;
            border-radius: 12px;
            overflow: hidden;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 1050;
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
        }
        .alert-preview-popuptext.alert-preview-show {
            visibility: visible;
            animation: alertPreviewFadeIn 0.2s ease;
        }
        @keyframes alertPreviewFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .alert-preview-popup-header {
            background: #f5f5f5;
            color: #333;
            padding: 12px 16px;
            font-weight: 600;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .alert-preview-popup-close {
            background: none;
            border: none;
            color: #666;
            font-size: 22px;
            line-height: 1;
            cursor: pointer;
            padding: 0 4px;
            opacity: 0.8;
        }
        .alert-preview-popup-close:hover {
            opacity: 1;
            color: #333;
        }
        .alert-preview-popup-body {
            background: #091D3E;
            color: #fff;
            padding: 20px 16px;
        }
        .alert-preview-popup-body .alert-preview-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 8px;
        }
        .alert-preview-popup-body .alert-preview-message {
            font-size: 1rem;
            color: #fff;
            margin-bottom: 8px;
        }
        .alert-preview-read-toggle {
            color: #33b9cb;
            cursor: pointer;
            font-size: 0.95rem;
            margin-bottom: 16px;
        }
        .alert-preview-read-toggle:hover {
            text-decoration: underline;
        }
        .alert-preview-img-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 16px 0;
        }
        .alert-preview-img {
            max-width: 100%;
            max-height: 280px;
            object-fit: contain;
            border-radius: 6px;
        }
        .alert-preview-description {
            font-size: 1rem;
            color: #fff;
            line-height: 1.5;
            margin-top: 12px;
        }
        .alert-preview-description.d-none {
            display: none !important;
        }
        .alert-preview-popup-footer {
            background: #091D3E;
            color: #fff;
            padding: 10px 16px;
            font-size: 0.9rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
    </style>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <?php $this->load->view('local/mobile_topmenu'); ?>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <?php $this->load->view('local/menu'); ?>
            <div class="d-flex flex-column flex-row-fluid wrapper pt-20" id="kt_wrapper">
                <?php $this->load->view('local/topmenu'); ?>
                <div class="content d-flex flex-column flex-column-fluid p-10">
                    <div class="row my-3 p-10 bg-white border rounded">
                        <div class="col-12 mb-4 d-flex justify-content-between align-items-center my-5">
                            <div>
                                <h3>Alert Table</h3>
                            </div>
                            <div class='btn btn-light-primary' id="alert_add"><i class='fa fa-plus'></i> Add New</div>
                        </div>
                        <div class="col-12">
                            <div class="table">
                                <table class="table" id="alert_table">
                                    <thead>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Alert Range</th>
                                        <th>Status</th>
                                        <th>Alert Type</th>
                                        <th>Send Status</th>
                                        <th>Created By</th>
                                        <th style="width:180px;">Action</th>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Modal Begin -->
    <div class="modal fade" id="alert_modal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <input type="hidden" id="alert-chosen_id" />
                <input type="hidden" id="alert-modal_type" />
                <div class="modal-header">
                    <h4 class="modal-title" style="font-weight:500;">Alert Editor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="ml-3">
                                <h5>Alert Title(EN)</h5>
                            </div>
                            <input class="form-control" id="alert-title" />
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="ml-3">
                                <h5>Alert Title(ES)</h5>
                            </div>
                            <input class="form-control" id="alert-title-es" />
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="ml-3">
                                <h5>Alert Message(EN)</h5>
                            </div>
                            <div id="alert-message" class="alert-summernote"></div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="ml-3">
                                <h5>Alert Message(ES)</h5>
                            </div>
                            <div id="alert-message-es" class="alert-summernote"></div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="ml-3">
                                <h5>Alert Description(EN)</h5>
                            </div>
                            <div id="alert-description" class="alert-summernote"></div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="ml-3">
                                <h5>Alert Description(ES)</h5>
                            </div>
                            <div id="alert-description-es" class="alert-summernote"></div>
                        </div>
                        <div class="col-md-8 mb-5">
                            <div class="ml-3">
                                <h5>Alert Range</h5>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input class="form-control mr-3" type="datetime-local" id="alert-start" />
                                <input class="form-control ml-3" type="datetime-local" id="alert-end" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="ml-3">
                                <h5>Status</h5>
                            </div>
                            <select class="form-control" id="alert-status">
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12 mx-5 mb-7 d-flex justify-content-start align-items-center">
                            <input type="checkbox" style="width: 24px; height: 24px;" id="alert-image-status" class="align-items-center mx-1" />
                            <label for="alert-image-status" class="align-items-center m-0">&nbsp;&nbsp;Upload Image</label>
                        </div>
                        <div class="col-md-4 mb-5 image-component d-none">
                            <div class="custom-file form-group">
                                <label class="custom-file-label" for="alert-image">Select an image</label>
                                <input type="file" accept="image/*" class="custom-file-input mx-3" id="alert-image" />
                            </div>
                        </div>
                        <div class="col-md-8 mb-5 image-component d-none">
                            <div class="form-group">
                                <h6 id="alert-image-path" class="mb-2"></h6>
                                <div id="alert-image-preview-wrapper" class="alert-image-preview-wrapper d-none">
                                    <img id="alert-image-preview" src="" alt="Image preview" class="alert-image-preview" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row w-100">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-start align-items-center">
                                <input type="checkbox" style="width: 24px; height: 24px;" id="alert-type" class="mx-1" />
                                <label for="alert-type" class="align-items-center m-0">
                                    <h6 class="m-0">&nbsp;&nbsp;Only Once</h6>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary mr-2" id="alert_modal_submit_btn">Submit</button>
                            <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alert Modal End -->

    <!-- Alert Preview Popup (landing page style) -->
    <div id="alert_preview_popup_overlay" class="alert-preview-popup-overlay d-none"></div>
    <div id="alert_preview_popup" class="alert-preview-popuptext">
        <div class="alert-preview-popup-header">
            <span>Alert Preview (as on landing page)</span>
            <button type="button" class="alert-preview-popup-close" aria-label="Close">&times;</button>
        </div>
        <div class="alert-preview-popup-body">
            <p id="alert_preview_title" class="alert-preview-title"></p>
            <div id="alert_preview_message_row">
                <span id="alert_preview_message" class="alert-preview-message d-block"></span>
                <a href="javascript:;" id="alert_preview_read_toggle" class="alert-preview-read-toggle d-inline-block">Read more &gt;&gt;</a>
            </div>
            <div id="alert_preview_image_wrapper" class="alert-preview-img-wrap d-none">
                <img id="alert_preview_image" src="" alt="Alert" class="alert-preview-img" />
            </div>
            <div id="alert_preview_description" class="alert-preview-description d-none"></div>
        </div>
        <div class="alert-preview-popup-footer">
            <span id="alert_preview_footer_title"></span>
        </div>
    </div>
    <!-- Alert Preview Popup End -->
</body>
<script>
    $(document).ready(function() {
        $('.alert-summernote').summernote({
            tabsize: 1,
            height: 120,
        })

        var alertTable = $("#alert_table").DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search alerts",
            },
            "ajax": {
                "url": "<?php echo base_url() ?>local/Alert/read",
                "type": "GET"
            },
            "columns": [{
                    data: "title"
                },
                {
                    data: "message"
                },
                {
                    data: "start",
                    render: function(data, type, row) {
                        return `<div class="start-date">${new Date(row.start).toLocaleDateString('en-US', {month: '2-digit', day: '2-digit', year: 'numeric', hour:"2-digit", minute:"2-digit", hour12: true})}</div>
                        <div class="start-date">${new Date(row.end).toLocaleDateString('en-US', {month: '2-digit', day: '2-digit', year: 'numeric', hour:"2-digit", minute:"2-digit", hour12: true})}</div>`
                    }
                },
                {
                    data: "status",
                    render: function(data, type, row) {
                        return row.status == 0 ? `<span class="text-danger">In Active</span>` : `<span class="text-primary">Active</span>`
                    }
                },
                {
                    data: "type",
                    render: function(data, type, row) {
                        return row.type == "once" ? `<span class="bg-light-primary text-primary p-2 rounded">Only Once</span>` : `<span class="bg-light-success text-success p-2 rounded">Always</span>`
                    }
                },
                {
                    data: "sent",
                    render: function(data, type, row) {
                        return row.sent == 0 ? `<span class="text-primary">No</span>` : `<span class="text-danger">Yes</span>`
                    }
                },
                {
                    data: "created_by",
                    render: function(data, type, row) {
                        return row.fname + " " + row.lname
                    }
                },
                {
                    data: "id",
                    render: function(data, type, row) {
                        return `<div idkey="${row.id}">
                            <span class="btn btn-icon btn-sm btn-light-info alert_preview_btn" title="Preview"><i class="fas fa-eye"></i></span>
                            <span class="btn btn-icon btn-sm btn-light-primary alert_edit_btn"><i class="fas fa-edit"></i></span>
                            <span class="btn btn-icon btn-sm btn-light-danger  alert_delete_btn"><i class="fas fa-trash"></i></span>
                        </div>`
                    }
                }
            ]
        })

        $("#alert_add").click(() => {
            $("#alert-modal_type").val("0")

            $("#alert-title").val("")
            $("#alert-message").summernote("code", "")
            $("#alert-description").summernote("code", "")
            $("#alert-title-es").val("")
            $("#alert-message-es").summernote("code", "")
            $("#alert-description-es").summernote("code", "")
            $("#alert-start").val("")
            $("#alert-end").val("")
            $("#alert-status").val(0)
            $("#alert-type").prop("checked", false)

            $("#alert-image-status").prop("checked", false)
            $(".image-component").addClass("d-none")
            $("#alert-image-path").text("")
            $("#alert-image").val("")
            $("#alert-image-preview").attr("src", "")
            $("#alert-image-preview-wrapper").addClass("d-none")

            $("#alert_modal").modal("show")
        })

        $("#alert_modal_submit_btn").click(() => {
            var fd = new FormData()
            fd.append("id", $("#alert-chosen_id").val())
            fd.append("title", $("#alert-title").val())
            fd.append("message", $("#alert-message").summernote('code').replace(/<[^>]*>/g, ''))
            fd.append("description", $("#alert-description").summernote('code').replace(/<[^>]*>/g, ''))
            fd.append("title_es", $("#alert-title-es").val())
            fd.append("message_es", $("#alert-message-es").summernote('code').replace(/<[^>]*>/g, ''))
            fd.append("description_es", $("#alert-description-es").summernote('code').replace(/<[^>]*>/g, ''))
            fd.append("start", $("#alert-start").val())
            fd.append("end", $("#alert-end").val())
            fd.append("status", $("#alert-status").val())
            fd.append("type", $("#alert-type").prop("checked") == true ? "once" : "always")
            fd.append("created_by", "<?php echo $this->session->userdata("userid") ?>")
            fd.append("image_actived", $("#alert-image-status").prop("checked"))
            if ($("#alert-image-status").prop("checked") == true) {
                var image = $('#alert-image')[0].files
                fd.append("img", image[0])
                fd.append("img_length", image.length)
            }
            $.post({
                url: $("#alert-modal_type").val() == "0" ? "<?php echo base_url() ?>local/Alert/add" : "<?php echo base_url() ?>local/Alert/update",
                method: "POST",
                data: fd,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(res) {
                    if (res.status == "success") {
                        toastr.success("Action Success!")
                    } else {
                        toastr.error("Action Failed!")
                    }
                    $("#alert_modal").modal("hide")
                    alertTable.ajax.reload()
                },
                error: function(error) {
                    toastr.error("An error was occured on the server!")
                }
            })
        })

        $(document).on("click", ".alert_preview_btn", function() {
            var id = $(this).parent().attr("idkey");
            $.post({
                url: "<?php echo base_url() ?>local/Alert/chosen",
                method: "POST",
                data: { id: id },
                dataType: "json",
                success: function(res) {
                    $("#alert_preview_title").text($("<div>").html(res.title || "").text());
                    $("#alert_preview_message").html(res.message || "");
                    var hasDesc = (res.description && $("<div>").html(res.description).text().trim().length > 0);
                    $("#alert_preview_description").html(res.description || "").addClass("d-none");
                    $("#alert_preview_read_toggle").text("Read more >>").data("expanded", false).toggle(hasDesc);
                    if (res.image) {
                        $("#alert_preview_image").attr("src", "<?php echo base_url(); ?>assets/images/alerts/" + res.image);
                        $("#alert_preview_image_wrapper").removeClass("d-none");
                    } else {
                        $("#alert_preview_image").attr("src", "");
                        $("#alert_preview_image_wrapper").addClass("d-none");
                    }
                    $("#alert_preview_footer_title").text($("<div>").html(res.title || "").text());
                    $("#alert_preview_popup").addClass("alert-preview-show");
                    $("#alert_preview_popup_overlay").removeClass("d-none");
                },
                error: function() {
                    toastr.error("Failed to load alert for preview.");
                }
            });
        });

        $("#alert_preview_read_toggle").on("click", function(e) {
            e.preventDefault();
            var $desc = $("#alert_preview_description");
            var expanded = $(this).data("expanded");
            if (expanded) {
                $desc.addClass("d-none");
                $(this).text("Read more >>").data("expanded", false);
            } else {
                $desc.removeClass("d-none");
                $(this).text("<< Read less").data("expanded", true);
            }
        });

        function closeAlertPreviewPopup() {
            $("#alert_preview_popup").removeClass("alert-preview-show");
            $("#alert_preview_popup_overlay").addClass("d-none");
        }
        $("#alert_preview_popup_overlay").on("click", closeAlertPreviewPopup);
        $(".alert-preview-popup-close").on("click", closeAlertPreviewPopup);

        $(document).on("click", ".alert_edit_btn", function() {
            $("#alert-modal_type").val("1")
            $("#alert-chosen_id").val($(this).parent().attr("idkey"))
            $.post({
                url: "<?php echo base_url() ?>local/Alert/chosen",
                method: "POST",
                data: {
                    id: $(this).parent().attr("idkey")
                },
                dataType: "json",
                success: function(res) {
                    $("#alert-title").val(res.title)
                    $("#alert-message").summernote("code", res.message)
                    $("#alert-description").summernote("code", res.description)
                    $("#alert-title-es").val(res.title_es)
                    $("#alert-message-es").summernote("code", res.message_es)
                    $("#alert-description-es").summernote("code", res.description_es)
                    $("#alert-start").val(res.start)
                    $("#alert-end").val(res.end)
                    $("#alert-status").val(res.status)
                    $("#alert-image-status").prop("checked", res.image_actived == 1 ? true : false)
                    if (res.image_actived == 1) {
                        $(".image-component").removeClass("d-none")
                        if (res.image) {
                            var imageUrl = "<?php echo base_url(); ?>assets/images/alerts/" + res.image;
                            $("#alert-image-preview").attr("src", imageUrl)
                            $("#alert-image-preview-wrapper").removeClass("d-none")
                            $("#alert-image-path").text(res.image)
                        } else {
                            $("#alert-image-preview").attr("src", "")
                            $("#alert-image-preview-wrapper").addClass("d-none")
                            $("#alert-image-path").text("")
                        }
                    } else {
                        $(".image-component").addClass("d-none")
                        $("#alert-image-preview").attr("src", "")
                        $("#alert-image-preview-wrapper").addClass("d-none")
                    }
                    $("#alert-image").val("")
                    res.type == "once" ? $("#alert-type").prop("checked", true) : $("#alert-type").prop("checked", false)

                    $("#alert_modal").modal("show")
                },
                error: function(error) {
                    toastr.error("An error was occurred on the server!")
                }
            })
        })

        $(document).on("click", ".alert_delete_btn", function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '<?php echo base_url() ?>local/Alert/delete',
                        method: "POST",
                        data: {
                            id: $(this).parent().attr("idkey")
                        },
                        dataType: "json",
                        success: function(res) {
                            if (res.status == "success") {
                                toastr.success("Action Success!")
                            } else {
                                toastr.error("Action Failed!")
                            }
                            $("#alert_modal").modal("hide")
                            alertTable.ajax.reload()
                        },
                        error: function(error) {
                            toastr.error("An error was occured on the server!")
                        }
                    });
                }
            });
        })

        $("#alert-image-status").on("change", function() {
            if ($(this).prop("checked") == true) {
                $(".image-component").removeClass("d-none")
                if ($("#alert-image-preview").attr("src")) {
                    $("#alert-image-preview-wrapper").removeClass("d-none")
                }
            } else {
                $(".image-component").addClass("d-none")
                $("#alert-image-preview").attr("src", "")
                $("#alert-image-preview-wrapper").addClass("d-none")
                $("#alert-image-path").text("")
                $("#alert-image").val("")
            }
        })

        $("#alert-image").on("change", function() {
            var file = this.files && this.files[0]
            if (file && file.type.indexOf("image") !== -1) {
                var reader = new FileReader()
                reader.onload = function(e) {
                    $("#alert-image-preview").attr("src", e.target.result)
                    $("#alert-image-preview-wrapper").removeClass("d-none")
                    $("#alert-image-path").text(file.name)
                }
                reader.readAsDataURL(file)
            } else {
                $("#alert-image-preview").attr("src", "")
                $("#alert-image-preview-wrapper").addClass("d-none")
                $("#alert-image-path").text("")
            }
        })
    })
</script>

</html>