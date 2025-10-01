<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        .insurance-container {
            margin: 0.5rem;
            padding: 1rem;
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .insurance-title {
            font-size: 2.7rem;
        }

        .insurance-table {
            margin: 3rem;
            padding: 0 4rem;
        }

        #insurances_table tbody tr td:first {
            display: flex !important;
            justify-content: center !important;
        }

        .px-p7 {
            padding-left: 7%;
            padding-right: 7%;
        }

        .px-p4 {
            padding-left: 4%;
            padding-right: 4%;
        }

        .px-p3 {
            padding-left: 3%;
            padding-right: 3%;
        }

        .insurance-contact-link {
            font-weight: 500;
            font-style: italic;
            text-decoration: underline !important;
        }

        .w-90 {
            width: 90% !important;
        }

        .w-70 {
            width: 70% !important;
        }

        .bordered {
            border: 1px solid lightgray;
        }

        .insurance-item-name {
            color: #33b9cb !important;
            font-size: 1.25rem;
        }

        .insurance-item-more {
            cursor: pointer;
            font-style: italic;
            text-decoration: underline;
        }
    </style>
</head>

<body class="counter-scroll header_sticky">
    <!-- Preloader -->
    <div class="wrapper">
        <div id="page">
            <?php include('header.php') ?>
            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix mb-10">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <section class="box-service-details">
                                    <div class="insurance-container">
                                        <p class="insurance-title d-flex justify-content-start align-items-center mb-4 px-p4"><?php echo $component_text['t_ins_title'] ?></p>
                                        <p class="px-p4 mb-3"><?php echo $component_text['t_ins_desc'] ?> <a href="<?php echo base_url() ?>Contact" class="insurance-contact-link"><?php echo $component_text['menu_contact'] ?></a></p>
                                        <div id="insurance-loading">
                                            <h3 class="w-100 d-flex justify-content-center align-items-center mb-5"><?php echo $component_text['c_loading'] ?>...</h3>
                                        </div>
                                        <div class="w-100 row justify-content-center" id="insurance-list-container">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#insurance_reload").click(async function() {
                $("#insurance-list-container").addClass("d-none")
                $("#insurance-loading").removeClass("d-none")
                await $.ajax({
                    "type": "POST",
                    "url": "<?php echo base_url() . "Insurances/read" ?>",
                    "data": {
                        clinic_id: "<?php echo $this->config->item('clinic_id') ?>"
                    },
                    "dataType": "json",
                    "success": function(res) {
                        $("#insurance-list-container").removeClass("d-none")
                        $("#insurance-loading").addClass("d-none")
                        const insurances = res.data
                        let html = ''
                        if (insurances.length) {
                            insurances.forEach(ins => {
                                html += `<div class="col-md-3 d-flex justify-content-center w-100 mb-3">
                                <div class="insurance-item w-70">
                                    <div class="w-100 d-flex justify-content-center bordered">
                                        <img src="<?php echo base_url() ?>assets/images/insurance/${ins.img ? ins.img : 'empty-img.jpg'}" style="width: 90%; height: 100px;">
                                    </div>
                                    <p class="text-light-green insurance-item-name">${ins.name}</p>
                                    <p>${ins.phone}</p>
                                    <p>${ins.address}</p>
                                </div>
                            </div>`
                            })
                        } else {
                            html = `<div style="text-align: center; font-size: xx-large; color: gray; height: 80px;">
                            <i class="fa fa-hospital-alt" style="font-size: xx-large;"></i> <?php echo $component_text['c_no_insurance'] ?>
                        </div>`
                        }
                        $("#insurance-list-container").html(html)
                    }
                })
            })
            const timer_id = setInterval(() => {
                $.ajax({
                    "type": "POST",
                    "url": "<?php echo base_url() . "central/Insurance/getinsurance" ?>",
                    "data": {
                        clinic_id: "<?php echo $this->config->item('clinic_id') ?>"
                    },
                    "dataType": "json",
                    "success": function(res) {
                        $("#insurance-loading").addClass("d-none")
                        const insurances = res.data
                        let html = ''
                        if (insurances.length) {
                            insurances.forEach(ins => {
                                html += `<div class="col-sm-6 col-lg-4 col-xl-3 d-flex justify-content-center w-100 mb-3">
                                            <div class="insurance-item w-70">
                                                <div class="w-100 d-flex justify-content-center bordered">
                                                    <img src="<?php echo base_url() ?>assets/images/insurance/${ins.img ? ins.img : 'empty-img.jpg'}" style="width: 90%; height: 100px;">
                                                </div>
                                                <p class="text-light-green insurance-item-name">${ins.name}</p>
                                                <p>${ins.phone}</p>
                                                <p>${ins.address}</p>
                                            </div>
                                        </div>`
                            })
                        } else {
                            html = `<div style="text-align: center; font-size: xx-large; color: gray; height: 80px;">
                            <i class="fa fa-hospital-alt" style="font-size: xx-large;"></i> <?php echo $component_text['c_no_insurance'] ?>
                        </div>`
                        }
                        $("#insurance-list-container").html(html)
                    }
                })
                clearInterval(timer_id)
            }, 300)

            $('select[name="insurances_table_length"]').removeClass('custom-select')
            $('select[name="insurances_table_length"]').addClass('mb-0')
            $('select[name="insurances_table_length"]').css({
                'height': 'calc(2.25rem + 2px)'
            })
            $('input[type="search"]').css({
                'margin-bottom': '0px',
                'height': 'calc(2.25rem + 2px)'
            })

            window.addEventListener('resize', () => {
                $('#insurances_table').css({
                    'width': '100%',
                    'table-layout': 'auto'
                })
            })
        })
    </script>
</body>

</html>