<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        .service-container {
            width: 80%;
            margin: 0.5rem;
            padding: 1rem;
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .service-title {
            font-size: 2.7rem;
        }

        .service-desc {
            font-size: 21px;
        }

        .box-service-details {
            display: flex;
            justify-content: center;
            align-items: center;
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

        .w-90 {
            width: 90% !important;
        }

        .w-80 {
            width: 80% !important;
        }

        .w-70 {
            width: 70% !important;
        }

        .w-40 {
            width: 40% !important;
        }

        .w-30 {
            width: 30% !important;
        }

        .w-20 {
            width: 20% !important;
        }

        ol,
        ul,
        li {
            list-style-position: inside !important;
            list-style-type: square !important;
        }

        ul {
            padding-left: 10px !important;
        }

        .text-black {
            color: black !important;
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
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="row">
                                                <div class="col-md-12 px-0">
                                                    <p class="service-title d-flex justify-content-start align-items-center mb-5 px-p7"><?php echo $service['title'] ?></p>
                                                </div>
                                                <div class="col-md-12 d-flex justify-content-start p-0 mb-5">
                                                    <img src="<?php echo base_url(); ?>assets/service/image/<?php echo $service['image']; ?>" class="w-40 round-xl" />
                                                    <div class="mb-5 mx-5">
                                                        <div class="d-flex justify-content-start align-items-center mb-5">
                                                            <button class="btn btn-lg btn-submit" id="request_service" data-title="<?php echo $service['title']; ?>"><?php echo $component_text['c_service_request']; ?></button>
                                                            <button class="btn btn-lg btn-submit mx-3" id="send_friend"><?php echo $component_text['c_service_send_friend']; ?></button>
                                                        </div>
                                                        <div class="qrcode text-left">
                                                            <img src="data:image/png;base64,<?php echo $qrcode; ?>" style="margin-left: -5px;" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 px-0">
                                                    <div class="mb-3 service-desc text-black"><?php echo $service['short_desc'] ?></div>
                                                    <div class="mb-3 service-desc text-black"><?php echo $service['long_desc'] ?></div>
                                                </div>
                                            </div>
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
                    <button type="button" class="btn btn-success" id="service_request_modal_pay"><?php echo $component_text['btn_pay'] ?></button>
                    <button type="button" class="btn btn-primary" id="service_request_modal_send"><?php echo $component_text['t_request'] ?></button>
                    <button type="button" class="btn btn-danger" id="service_request_modal_close"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-fade scroll-y" tabindex="-1" role="dialog" aria-hidden="true" id="service_friend_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" id="friend_service_name" />
                <div class="modal-header py-3">
                    <h3 class="my-2" style="font-size: 16px;" id="friend_service_title"><?php echo $component_text['t_request_service'] ?></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="friend_name"><?php echo $component_text['placeholder_your_name']; ?></label>
                            <input id="friend_name" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_your_name']; ?>" />
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="friend_email"><?php echo $component_text['placeholder_email']; ?></label>
                            <input id="friend_email" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_email']; ?>" />
                        </div>
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center w-75">
                                <img id="friend_captcha_image" src="<?php echo base_url() . $captcha_image ?>" alt="Captcha Image" class="w-75" />
                                <i id="friend_captcha_change" class="fa fa-lg fa-rotate-right text-primary" style="cursor: pointer; padding: 0px; margin:0; font-size: 32px;"></i>
                            </div>
                            <div class="w-75">
                                <input id="friend_captcha" class="form-control-sm input-contact m-0" type="text" placeholder="<?php echo $component_text['placeholder_captcha']; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="service_friend_modal_send"><?php echo $component_text['t_request'] ?></button>
                    <button type="button" class="btn btn-danger" id="service_friend_modal_close"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    let _selected_service_id = "<?php echo $service['id']; ?>";
    let _selected_service_title = "";
    let _selected_service_cost = 0;

    $(document).ready(function() {
        // request service
        $("#request_service").click(function() {
            _selected_service_title = $(this).attr("data-title")
            
            $.ajax({
                url: '<?php echo base_url(); ?>' + 'Services/getCost',
                method: 'POST',
                data: {
                    id: _selected_service_id
                },
                dataType: "json",
                success: function(res) {
                    _selected_service_cost = parseFloat(res.cost)
                    if (_selected_service_cost > 0) {
                        $("#service_request_modal_pay").css({ 'display': 'block' })
                    } else {
                        $("#service_request_modal_pay").css({ 'display': 'none' })
                    }

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

                    $("#service_name").val(_selected_service_title)
                    $("#service_title").text(`<?php echo $component_text['t_request_service']; ?> - ${_selected_service_title}`)
                    $("#service_request_modal").css({ 'display': 'block' })
                }
            })
        })

        $("#service_request_modal_pay").click(function() {
            if (_selected_service_cost > 0) {
                $("#service_request_modal_pay").css({ 'display': 'block' })
                $("#payment-modal-title").text(_selected_service_title + ` - $${_selected_service_cost}`)

                $("#service_request_modal").css({ 'display': 'none' })
                $("#payment-modal").css({ 'display': 'block' })

                // initialize payment form
                $("#payment-category").val("service")
                $("#payment-category-id").val(_selected_service_id)
                
                payment_items = [{
                    id: _selected_service_title,
                    amount: _selected_service_cost * 100.0
                }]
                initialize()
            }
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

        // send friend
        $("#send_friend").click(function() {
            $("#friend_name").val("")
            $("#friend_email").val("")
            $("#friend_captcha").val("")

            $("#friend_service_title").text(`<?php echo $component_text['c_service_send_friend']; ?> - <?php echo $service['title'] ?>`)
            $("#service_friend_modal").css({
                'display': 'block'
            })
        })

        $("#friend_captcha_change").click(function() {
            $.post({
                url: '<?php echo base_url() ?>Home/changeCaptchaImageForFooter',
                method: 'POST',
                data: {},
                dataType: 'text',
                success: function(res) {
                    $('#friend_captcha_image').attr('src', '<?php echo base_url() ?>' + res)
                }
            })
        })

        $("#service_friend_modal_send").click(function() {
            const entry = {
                name: $("#friend_name").val(),
                email: $("#friend_email").val(),
                captcha: $("#friend_captcha").val(),
                id: id
            }

            var errors = "";
            if (entry.name == "") {
                errors += '<?php echo $component_text['m_invalid_name'] ?>';
            } else if (entry.email == "") {
                errors += '<?php echo $component_text['m_invalid_email'] ?>';
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
                    url: '<?php echo base_url() ?>' + 'Services/sendEmailToFriend',
                    data: {
                        name: encrypt.encrypt(entry.name),
                        email: encrypt.encrypt(entry.email),
                        captcha: encrypt.encrypt(entry.captcha),
                        id: id,
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                title: '<?php echo $component_text['c_success'] ?>',
                                icon: 'success',
                            });

                            $("#service_friend_modal").css({
                                'display': 'none'
                            })

                            $('#friend_captcha_image').attr('src', '<?php echo base_url() ?>' + data.captcha)
                        } else {
                            Swal.fire({
                                title: '<?php echo $component_text['c_error'] ?>',
                                icon: 'error',
                            });
                            $('#friend_captcha_image').attr('src', '<?php echo base_url() ?>' + data.captcha)
                        }
                    }
                });
            }
        })

        $("#service_friend_modal_close").click(function() {
            $("#service_friend_modal").css({
                'display': 'none'
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