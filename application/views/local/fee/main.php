<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('local/header'); ?>
    <style>
        .nav-link {
            color: white !important;
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
                    <div class="row">
                        <div class="col-md-12 bg-primary p-2 mb-2 text-white">
                            <div class="d-flex justify-content-around flex-wrap">
                                <div class="d-flex align-items-center" style="font-size:20px; font-weight:bold;">Fees</div>
                                <ul class="nav nav-tabs nav-pills" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#fee" data-toggle="tab">Clinic Fees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#fee_desc" data-toggle="tab">Fee Description</a>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-end align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input w-25px h-25px my-0 py-0" id="display_fee_page" <?php echo $area_toggle['fee_area'] == 1 ? 'checked' : '' ?> />
                                        <label class="form-check-label fs-5 text-white" for="display_fee_page">&nbsp;&nbsp;&nbsp;&nbsp;Display Page</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active" id="fee">
                                    <?php include('fee.php') ?>
                                </div>
                                <div class="tab-pane" id="fee_desc">
                                    <?php include('description.php') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $("#display_fee_page").change(function() {
            const value = $(this).prop("checked") ? 1 : 0

            $.ajax({
                url: '<?php echo base_url() ?>' + 'local/Fees/updateDisplayFeePage',
                method: "POST",
                data: {
                    value: value
                },
                dataType: "json",
                success: function(data) {
                    if (data.status == "success") {
                        toastr.success("Updated Successfully!")
                    } else {
                        toastr.error("Failed to update!")
                    }
                },
                error: function(error) {
                    toastr.error("An error was occurred on the server!")
                }
            })
        })
    })
</script>

</html>