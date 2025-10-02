<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        .service-container {
            margin: 0.5rem;
            padding: 1rem;
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .service-title {
            font-size: 2.7rem;
        }

        .service-table {
            margin: 3rem;
            padding: 0 4rem;
        }

        #services_table tbody tr td:first {
            display: flex !important;
            justify-content: center !important;
        }

        .px-p7 {
            padding-left: 7%;
            padding-right: 7%;
        }

        .service-contact-link {
            font-weight: 500;
            font-style: italic;
            text-decoration: underline !important;
        }

        .w-90 {
            width: 90% !important;
        }

        .w-95 {
            width: 95% !important;
        }

        .w-80 {
            width: 80% !important;
        }

        .w-70 {
            width: 70% !important;
        }

        .bordered {
            border: 1px solid lightgray;
        }

        .round {
            border-radius: 4px !important;
        }

        .round-xl {
            border-radius: 12px !important;
        }

        .round-top-xl {
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
        }

        .service-item-name {
            color: #33b9cb !important;
            font-size: 1.25rem;
        }

        .service-item-more {
            cursor: pointer;
            font-style: italic;
            text-decoration: underline;
        }

        .service-desc {
            font-size: 21px;
        }

        .service-card-item {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .static-body {
            border-radius: 6px;
            box-shadow: 2px 2px 4px #00000020;
            transition: all 200ms ease-out;
        }

        .static-body:hover {
            box-shadow: 4px 4px 8px #00000040;
            transition: all 200ms ease-out;
            background-color: #FFFFFF90 !important;
        }

        .fixed-button {
            width: 54px;
            height: 54px;
            position: absolute;
            top: 10px;
            right: 100px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 24px;
        }

        .fixed-button:hover {
            background-color: #0056b3;
            /* Darker shade on hover */
        }

        .ribbon {
            position: relative
        }

        .ribbon .ribbon-label {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px 10px;
            position: absolute;
            z-index: 1;
            background-color: var(--bs-ribbon-label-bg);
            box-shadow: var(--bs-ribbon-label-box-shadow);
            color: var(--bs-primary-inverse);
            top: 10px;
            right: 0;
            transform: translateX(5px) translateY(-50%)
        }

        .ribbon .ribbon-label>.ribbon-inner {
            z-index: -1;
            position: absolute;
            padding: 0;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .ribbon .ribbon-label:after {
            border-color: var(--bs-ribbon-label-border-color)
        }

        .ribbon-vertical .ribbon-label {
            padding: 5px 10px;
            min-width: 36px;
            min-height: 46px;
            text-align: center
        }

        .ribbon.ribbon-top .ribbon-label {
            top: 0;
            transform: translateX(-15px) translateY(-4px);
            border-bottom-right-radius: .475rem;
            border-bottom-left-radius: .475rem
        }

        .ribbon.ribbon-bottom .ribbon-label {
            border-top-right-radius: .475rem;
            border-top-left-radius: .475rem
        }

        .ribbon.ribbon-start .ribbon-label {
            top: 50%;
            left: 0;
            right: auto;
            transform: translateX(-5px) translateY(-50%);
            border-top-right-radius: .475rem;
            border-bottom-right-radius: .475rem
        }

        .ribbon.ribbon-end .ribbon-label {
            border-top-left-radius: .475rem;
            border-bottom-left-radius: .475rem
        }

        .ribbon.ribbon-clip.ribbon-start .ribbon-label {
            left: -5px
        }

        .ribbon.ribbon-clip.ribbon-start .ribbon-label .ribbon-inner {
            border-top-right-radius: .475rem;
            border-bottom-right-radius: .475rem
        }

        .ribbon.ribbon-clip.ribbon-start .ribbon-label .ribbon-inner:after,
        .ribbon.ribbon-clip.ribbon-start .ribbon-label .ribbon-inner:before {
            content: "";
            position: absolute;
            border-style: solid;
            border-color: transparent !important;
            bottom: -10px
        }

        .ribbon.ribbon-clip.ribbon-start .ribbon-label .ribbon-inner:before {
            border-width: 0 10px 10px 0;
            border-right-color: var(--bs-ribbon-clip-bg) !important;
            left: 0
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label {
            right: -5px
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner {
            border-top-left-radius: .475rem;
            border-bottom-left-radius: .475rem;
            box-shadow: 0px 2px 3px #88888888
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner:after,
        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner:before {
            content: "";
            position: absolute;
            border-style: solid;
            border-color: transparent !important;
            bottom: -10px
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner:before {
            border-width: 0 0 10px 10px;
            border-left-color: var(--bs-ribbon-clip-bg) !important;
            right: 0
        }

        .ribbon.ribbon-triangle {
            position: absolute;
            z-index: 1;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start
        }

        .ribbon.ribbon-triangle.ribbon-top-start {
            top: 0;
            left: 0;
            width: 4rem;
            height: 4rem;
            border-bottom: solid 2rem transparent !important;
            border-left: solid 2rem transparent;
            border-right: solid 2rem transparent !important;
            border-top: solid 2rem transparent
        }

        .ribbon.ribbon-triangle.ribbon-top-end {
            top: 0;
            right: 0;
            width: 4rem;
            height: 4rem;
            border-bottom: solid 2rem transparent !important;
            border-left: solid 2rem transparent !important;
            border-right: solid 2rem transparent;
            border-top: solid 2rem transparent
        }

        .ribbon.ribbon-triangle.ribbon-bottom-start {
            bottom: 0;
            left: 0;
            width: 4rem;
            height: 4rem;
            border-bottom: solid 2rem transparent;
            border-left: solid 2rem transparent;
            border-right: solid 2rem transparent !important;
            border-top: solid 2rem transparent !important
        }

        .ribbon.ribbon-triangle.ribbon-bottom-end {
            bottom: 0;
            right: 0;
            width: 4rem;
            height: 4rem;
            border-bottom: solid 2rem transparent;
            border-right: solid 2rem transparent;
            border-left: solid 2rem transparent !important;
            border-top: solid 2rem transparent !important
        }

        .bg-success {
            background-color: #00a161 !important;
        }

        .bg-danger {
            background-color: #e42855 !important;
        }

        .bg-primary {
            background-color: #006ae6 !important;
        }

        .text-secondary {
            color: #707070 !important;
        }

        .bg-secondary {
            background-color: #707070 !important;
        }

        .bg-inactive {
            background-color: lightgray !important;
        }

        .scroll-y {
            overflow-y: scroll !important;
        }
    </style>
</head>

<body class="counter-scroll header_sticky bg-gray">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="wrapper">
        <div id="page">
            <?php include('header.php') ?>
            <div id="main-content" class="site-main clearfix mb-10">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <section class="box-service-details">
                                    <div class="service-container">
                                        <p class="service-title d-flex justify-content-start align-items-center mb-4 px-5"><?php echo $component_text['menu_services'] ?></p>
                                        <p class="mb-3 service-desc px-5"><?php echo $component_text['t_service_desc'] ?></p>
                                        <div class="w-100 row justify-content-center" id="service-list-container">
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

    <div class="modal modal-fade scroll-y" tabindex="-1" role="dialog" aria-hidden="true" id="service_request_modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <input type="hidden" id="service_name" />
                <div class="modal-header py-3">
                    <h3 style="font-size: 24px;" id="service_title"><?php echo $component_text['t_request_service'] ?></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="fname"><?php echo $component_text['placeholder_first_name']; ?></label>
                            <input id="fname" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_first_name']; ?>" />
                        </div>
                        <div class="col-md-4">
                            <label for="lname"><?php echo $component_text['placeholder_last_name']; ?></label>
                            <input id="lname" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_last_name']; ?>" />
                        </div>
                        <div class="col-md-4">
                            <label for="dob"><?php echo $component_text['placeholder_dob']; ?></label>
                            <input id="dob" class="form-control-sm input-contact mb-2" type="date" />
                        </div>
                        <div class="col-md-6">
                            <label for="email"><?php echo $component_text['placeholder_email']; ?></label>
                            <input id="email" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_email']; ?>" />
                        </div>
                        <div class="col-md-6">
                            <label for="phone"><?php echo $component_text['placeholder_phone']; ?></label>
                            <input id="phone" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_phone']; ?>" />
                        </div>
                        <div class="col-md-12">
                            <label for="message"><?php echo $component_text['placeholder_message']; ?></label>
                            <textarea id="message" class="m-0" style="height: 100px;" placeholder="<?php echo $component_text['placeholder_message']; ?>"></textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                            <p><?php echo $component_text['t_opt_in_out_header']; ?></p>
                        </div>
                        <div class="col-md-12 mb-1">
                            <div>
                                <input type="radio" value="1" name="opt_status" id="opt_in" checked />
                                <label for="opt_in"><?php echo $component_text['t_opt_in_out_in']; ?></label>
                            </div>
                            <div>
                                <input type="radio" value="0" name="opt_status" id="opt_out" />
                                <label for="opt_out"><?php echo $component_text['t_opt_in_out_out']; ?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <p><?php echo $component_text['t_opt_in_out_footer']; ?></p>
                        </div>
                        <div class="col-12 d-none" id="service_opt_moreinfo">
                            <p><?php echo $component_text['t_opt_in_out_more']; ?></p>
                        </div>
                        <div class="col-12 mb-3 pt-0">
                            <a href="#" id="service_opt_more_info_btn"><?php echo $component_text['t_opt_more_info']; ?> >></a>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center w-75">
                                <img id="captcha_image" src="<?php echo base_url() . $captcha_image ?>" alt="Captcha Image" class="w-75" />
                                <i id="captcha_change" class="fa fa-lg fa-rotate-right text-primary" style="cursor: pointer; padding: 0px; margin:0; font-size: 32px;"></i>
                            </div>
                            <div class="w-75">
                                <input id="captcha" class="form-control-sm input-contact m-0" type="text" placeholder="<?php echo $component_text['placeholder_captcha']; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="service_request_modal_send"><?php echo $component_text['t_request'] ?></button>
                    <button type="button" class="btn btn-danger" id="service_request_modal_close"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const lang = "<?php echo $this->session->userdata("language") ?>"
    $(document).ready(function() {

        $.ajax({
            url: '<?php echo base_url(); ?>' + 'local/Services/getClinicService',
            method: 'POST',
            data: {
                language: lang == 'en' ? 17 : 25,
                category: 0,
                status: 1
            },
            dataType: 'json',
            success: function(res) {
                const result = res.data

                let html = ""
                result.forEach(item => {
                    const cost = item.cost
                    const status = item.status
                    // here
                    html += `<div class="col-md-6 col-xl-4 mb-5 px-5">
                                 <div class="service-card-item">
                                     <div class="bordered round-xl w-95 static-body">
                                         <div class="ribbon ribbon-end ribbon-clip" style="min-height: 150px;">
                                             <div class="ribbon-label text-white ${status == 0 ? "bg-inactive" : (cost > 0 ? "bg-danger" : "bg-success")}">
                                                 ${cost > 0 ? "$" + cost : "FREE"}
                                                 <span class="ribbon-inner text-secondary"></span>
                                             </div>
                                             <img src="<?php echo base_url(); ?>assets/service/image/${item.image}" class="w-100 round-top-xl" />
                                         </div>
                                         <div class="w-100 text-center d-flex justify-content-center align-items-center ${status == 0 ? "bg-inactive" : ""}" style="min-height: 80px;">
                                             <div class="mb-2" data-id="${item.id}">
                                                 <p class="pt-2" style="font-size: 21px;">${item.title}</p>
                                                 <div class="d-flex justify-content-center align-items-center">
                                                     <a href="javascript:;" class="text-primary service_request" style="font-size: 18px;" data-id="${item.id}" data-title="${item.title}"><?php echo $component_text['t_request_service'] ?></a>
                                                     &nbsp;&nbsp;|&nbsp;&nbsp;
                                                     <a href="<?php echo base_url(); ?>Services/detail?s=${item.id}" target="_blank" style="font-size: 18px;"><?php echo $component_text['btn_read_more']; ?></a>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                 </div>
                             </div>`
                })
                $("#service-list-container").html(html)
            }
        })

        $(document).on("click", ".service_request", function() {
            const id = $(this).attr("data-id")
            const title = $(this).attr("data-title")
            $.ajax({
                url: '<?php echo base_url(); ?>' + 'Services/getCost',
                method: 'POST',
                data: {
                    id: id
                },
                dataType: "json",
                success: function(res) {
                    const cost = parseFloat(res.cost)
                    if (cost > 0) { // payment modal
                        $("#payment-modal-title").text(title + ` - $${cost}`)
                        $("#payment-modal").css({
                            'display': 'block'
                        })

                        // initialize payment form
                        $("#payment-category").val("service")
                        $("#payment-category-id").val(id)
                        
                        payment_items = [{
                            id: title,
                            amount: cost * 100.0
                        }]
                        initialize()
                    } else { // request modal
                        // if login
                        const isLogged = "<?php echo $this->session->userdata('patient_id') > 0 ?>"
                        if (isLogged == 1) {
                            $("#fname").val("<?php echo $patient_info['fname']; ?>")
                            $("#lname").val("<?php echo $patient_info['lname']; ?>")
                            $("#phone").val("<?php echo $patient_info['phone']; ?>")
                            $("#dob").val("<?php echo $patient_info['dob']; ?>")
                            $("#email").val("<?php echo $patient_info['email']; ?>")
                        } else {
                            $("#fname").val("")
                            $("#lname").val("")
                            $("#dob").val("")
                            $("#email").val("")
                            $("#phone").val("")
                        }
                        $("#message").val("")
                        $("#captcha").val("")

                        $("#service_name").val(title)
                        $("#service_title").text(`<?php echo $component_text['t_request_service']; ?> - ${title}`)
                        $("#service_request_modal").css({
                            'display': 'block'
                        })
                    }
                }
            })
        })

        $("#service_request_modal_send").click(function() {
            const entry = {
                fname: $("#fname").val(),
                lname: $("#lname").val(),
                dob: $("#dob").val(),
                email: $("#email").val(),
                phone: $("#phone").val(),
                subject: "Service Category",
                contact_reason: $("#service_name").val(),
                message: $("#message").val(),
                captcha: $("#captcha").val(),
                opt_status: $('input[name="opt_status"]:checked').val()
            }

            var errors = "";
            if (entry.fname == "" || entry.lname == "") {
                errors += '<?php echo $component_text['m_invalid_name'] ?>';
            } else if (entry.dob == "") {
                errors += '<?php echo $component_text['m_invalid_dob'] ?>';
            } else if (entry.email == "") {
                errors += '<?php echo $component_text['m_invalid_email'] ?>';
            } else if (entry.phone == "") {
                errors += '<?php echo $component_text['m_invalid_phone'] ?>';
            } else if (entry.subject == "") {
                errors += '<?php echo $component_text['m_invalid_subject'] ?>';
            } else if (entry.message == "") {
                errors += '<?php echo $component_text['m_invalid_message'] ?>';
            } else if (entry.captcha == "") {
                errors += '<?php echo $component_text['m_invalid_captcha'] ?>';
            }
            if (errors) {
                Swal.fire({
                    title: '<?php echo $component_text['t_invalid_info'] ?>',
                    text: errors,
                    icon: 'warning',
                    confirmButtonText: 'Cool'
                })
                return false;
            } else {
                const encrypt = new JSEncrypt();
                encrypt.setPublicKey(`<?php echo $this->config->item('public_key') ?>`);

                $.post({
                    method: "POST",
                    url: '<?php echo base_url() ?>' + 'Home/submit',
                    data: {
                        contact_name: encrypt.encrypt(entry.fname + " " + entry.lname),
                        contact_email: encrypt.encrypt(entry.email),
                        contact_cel: encrypt.encrypt(entry.phone),
                        contact_dob: encrypt.encrypt(entry.dob),
                        contact_captcha: encrypt.encrypt(entry.captcha),
                        contact_lang: `<?php echo $this->session->userdata('language'); ?>`,
                        contact_subject: entry.subject,
                        contact_message: entry.message,
                        contact_time: "Anytime",
                        opt_status: entry.opt_status,
                        contactpttype: "",
                        contactusertype: "Patient",
                        contactreason: entry.contact_reason
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                title: '<?php echo $component_text['c_case'] ?>' + '#: ' + data.id + '<?php echo $acronym ?>',
                                text: '<?php echo $component_text['t_contact_result_success'] ?>',
                                icon: 'success',
                            });

                            $("#service_request_modal").css({
                                'display': 'none'
                            })
                        } else {
                            Swal.fire({
                                title: '<?php echo $component_text['c_error'] ?>',
                                text: data.status,
                                icon: 'error',
                            });
                            $('#captcha_image').attr('src', '<?php echo base_url() ?>' + data.captcha)
                        }
                    }
                });
            }
        })

        $("#service_request_modal_close").click(function() {
            $("#service_request_modal").css({
                'display': 'none'
            })
        })

        $("#captcha_change").click(function() {
            $.post({
                url: '<?php echo base_url() ?>Home/changeCaptchaImageForFooter',
                method: 'POST',
                data: {},
                dataType: 'text',
                success: function(res) {
                    $('#captcha_image').attr('src', '<?php echo base_url() ?>' + res)
                }
            })
        })

        $('#service_opt_more_info_btn').click(function(e) {
            e.preventDefault();
            if ($('#service_opt_moreinfo').hasClass('d-none')) {
                $('#service_opt_moreinfo').removeClass('d-none');
                $('#service_opt_more_info_btn').text("<?php echo '<< ' . $component_text['t_opt_less_info']; ?>");
            } else {
                $('#service_opt_moreinfo').addClass('d-none');
                $('#service_opt_more_info_btn').text("<?php echo $component_text['t_opt_more_info'] . ' >>'; ?>");
            }
        })

        $(".modal-close").click(function() {
            $(".modal").css({
                'display': 'none'
            })
        })
    })
</script>

</html>