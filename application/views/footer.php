<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="themesflat-spacer clearfix" data-desktop="95" data-mobile="95" data-smobile="25"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box-list-footer">
                    <div class="box-list box-contact col-md-3 col-12">
                        <div class="title-footer text-color-white"><?php echo $component_text['c_footer_medical_guide'] ?></div>
                        <ul class="one-half first">
                            <li><a href="<?php echo base_url() ?>TheClinic" title=""><span><i class="fa fa-square"></i></span><?php echo $component_text['menu_the_clinic'] ?></a></li>
                            <li><a href="<?php echo base_url() ?>AboutUs" title=""><span><i class="fa fa-square"></i></span><?php echo $component_text['menu_about_us'] ?></a></li>
                            <li><a href="<?php echo base_url() ?>Orientation" title=""><span><i class="fa fa-square"></i></span><?php echo $component_text['menu_orientation'] ?></a></li>
                            <li><a href="<?php echo base_url() ?>Insurances" title=""><span><i class="fa fa-square"></i></span><?php echo $component_text['menu_insurances'] ?></a></li>
                            <li><a href="<?php echo base_url() ?>Newsletter" title=""><span><i class="fa fa-square"></i></span><?php echo $component_text['menu_newsletter'] ?></a></li>
                            <li class="mx-3"><a href="#" title=""><span><i class="fa fa-square"></i></span><?php echo $component_text['menu_contact'] ?></a></li>
                            <li class="mx-3"><a href="#" title=""><span><i class="fa fa-square"></i></span><?php echo $component_text['link_portal'] ?></a></li>
                        </ul><!-- /.one-half -->
                    </div><!-- Medical Guide -->
                    <div class="box-list box-useful col-md-3 col-12">
                        <div class="title-footer text-color-white mb-4"><a><?php echo $component_text['c_footer_announcement'] ?></a></div>
                        <p class="text-white pr-2 mb-3 mx-n5"><?php echo $component_text['c_footer_announcement_text'] ?></p>
                        <div class="form-contact-us w-100 px-2 mx-n6">
                            <div class="content-form">
                                <input tabindex="1" id="footer_first_name" name="footer_first_name" value="" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_first_name']; ?>" autocomplete="new-firstname">
                                <input tabindex="1" id="footer_last_name" name="footer_last_name" value="" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_last_name']; ?>" autocomplete="new-lastname">
                                <input tabindex="1" id="footer_dob" name="footer_dob" value="" class="form-control-sm input-contact mb-2" type="date" autocomplete="new-dob">
                                <input tabindex="1" id="footer_email" name="footer_email" value="" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_email']; ?>" autocomplete="new-email">
                                <input tabindex="1" id="footer_phone" name="footer_phone" value="" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_phone']; ?>" autocomplete="new-phone">
                                <div class="row">
                                    <div class="col-10 mb-2">
                                        <img id="footer_captcha_image" src="<?php echo base_url() . $footer_captcha_image ?>" alt="Captcha Image" class="w-100 h-100" />
                                    </div>
                                    <div class="col-1 w-100 mb-2 d-flex justify-content-center align-items-center" style="padding: 0px; margin:0; font-size: 24px;">
                                        <i id="footer_captcha_change" class="fa fa-lg fa-rotate-right text-primary d-flex justify-content-center align-items-center" style="transform:translateY(50%) !important; cursor: pointer;"></i>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input tabindex="3" id="footer_captcha" name="footer_captcha" value="" class="form-control-sm input-contact mb-2" type="text" placeholder="<?php echo $component_text['placeholder_captcha']; ?>" autocomplete="new-captcha">
                                    </div>
                                </div>
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <button id="footer_singup_btn" name="action" value="submit" class="btn bg-accent btn-submit" role="button"><span><?php echo $component_text['btn_send']; ?></span></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- Announcements -->
                    <div class="box-list box-recent col-md-3 col-12">
                        <div class="title-footer text-color-white"><a><?php echo $component_text['c_footer_get_in_touch'] ?></a></div>
                        <ul class="one-half first">
                            <li>
                                <span><i class="fas fa-map-marker-alt flat-icon-footer "></i></span>
                                <span><a href="#"><?php echo $contact_info['address'] ?></a></span>
                            </li>
                            <li>
                                <span><i class="fa fa-phone-alt flat-icon-footer"></i></span>
                                <span><a href="#"><?php echo $contact_info['tel'] ?></a></span>
                            </li>
                            <li>
                                <span><i class="fa fa-fax flat-icon-footer"></i></span>
                                <span><a href="#"><?php echo $contact_info['fax'] ?></a></span>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope flat-icon-footer"></i></span>
                                <span><a href="#"><?php echo $contact_info['email'] ?></a></span>
                            </li>
                        </ul><!-- /.one-half -->
                    </div><!-- Get in touch -->
                    <div class="box-list box-services col-md-3 col-12">
                        <div class="title-footer text-color-white"><a><?php echo $component_text['t_qrcode'] ?></a></div>
                        <div class="w-100" style="padding-top: 36px;">
                            <img class="mb-4" src="<?php echo base_url() ?>assets/images/qrcode.png" width="70%" />
                            <a href="https://precisionq.com" target="_blank"><img class="mb-4" src="<?php echo base_url() ?>assets/images/quality-logo-q.png" width="70%" /></a>
                            <a href="https://precisionq.com" target="_blank">
                                <p class="text-white cursor-pointer mx-n5"><?php echo $component_text['c_footer_powered_by'] ?></p>
                            </a>
                        </div>
                    </div><!-- QR Code -->
                </div><!-- /widget-box -->
            </div>
        </div>
        <div class="row">
            <div class="themesflat-spacer clearfix" data-desktop="95" data-mobile="50" data-smobile="40"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <h3 style="color:white; padding-top:60px; padding-bottom:60px; width:70%; text-align:center">
                    <?php
                    $footer = str_replace('$year;', $sysinfo["year"], $component_text['t_home_footer']);
                    $footer = str_replace('$clinic_name;', "GENERAL MEDICAL SERVICE OF QUEENS", $footer);
                    $footer = str_replace('$version;', $sysinfo["word"] . " " . $sysinfo["month"] . $sysinfo["year"], $footer);
                    $footer = str_replace('$terms_of_use', "<a class='text-primary' href='" . base_url() . "terms_of_use" . "' target='_blank'>" . $component_text['terms_of_use'] . "</a>", $footer);
                    $footer = str_replace('$privacy_policy', "<a class='text-primary' href='" . base_url() . "privacy_policy" . "' target='_blank'>" . $component_text['privacy_policy'] . "</a>", $footer);
                    echo $footer;
                    ?>
                </h3>
                <ul class="list-icon-bottom">
                    <li class="bottom-icon-style"><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    <li class="bottom-icon-style"><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                    <li class="bottom-icon-style"><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                    <li class="bottom-icon-style"><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div><!--/.footer-bottom-->
</footer>

<div class="modal modal-fade scroll-y" tabindex="-1" role="dialog" aria-hidden="true" id="payment-modal">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="font-size: 24px;" id="payment-modal-title"></h3>
                <div><i class="modal-close fa fa-times" style="cursor: pointer;"></i></div>
            </div>
            <div class="modal-body">
                <div class="row payment-container">
                    <form id="payment-form">
                        <input type="hidden" id="payment-category" />
                        <input type="hidden" id="payment-category-id" />
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" id="payment-name" class="form-control-sm m-0" placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" id="payment-email" class="form-control-sm m-0" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" id="payment-phone" class="form-control-sm m-0" placeholder="Your Phone Number" />
                                </div>
                            </div>
                        </div>
                        <div id="payment-element"></div>
                        <div id="payment-message" class="hidden"></div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="payment-button" id="payment-submit">
                    <div class="spinner hidden" id="payment-spinner"></div>
                    <span id="payment-button-text">Pay now</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="button-go-top">
    <a href="#" class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/jquery-countTo.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/jquery-validate.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<!-- <script type="text/javascript" src="revolution/js/slider_v1.js"></script>
    <script type="text/javascript" src="revolution/js/slider_v2.js"></script> -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!--animation-->
<script src="<?php echo base_url() ?>assets/animation/wow.min.js"></script>
<script src="<?php echo base_url() ?>assets/javascript/animation.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/main.js"></script>

<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#6993FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>
<script src="<?php echo base_url() ?>adminassets/js/scripts.bundle.js?v=7.0.5"></script>
<script src="<?php echo base_url() ?>assets/datatables/datatables.bundle.js"></script>

<script src="https://www.google.com/recaptcha/api.js?" async defer></script>
<script src="<?php echo base_url() ?>assets/needpopup/needpopup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsencrypt/3.3.2/jsencrypt.min.js" integrity="sha512-94ncgEEqkuZ4yNTFmu2dSn1TJ6Ij+ANQqpR7eLVU99kzvYzu6UjBxuVoNHtnd29R+T6nvK+ugCVI698pbyEkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--owl.carousel-->
<script src="<?php echo base_url(), 'assets/fancybox/jquery.fancybox.js'; ?>"></script>
<script src="<?php echo base_url(), 'assets/fancybox/jquery.fancybox-media.js'; ?>"></script>

<script src="<?php echo base_url() ?>assets/owlcarousel/carousel.js"></script>
<script src="<?php echo base_url() ?>assets/owlcarousel/owl.carousel.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>

<script>
    // payment begin //
    const stripe = Stripe("<?php echo $this->config->item("stripe_key") ?>");
    // The items the customer wants to buy
    let payment_items = [{
        id: "xl-tshirt",
        amount: 1000
    }];
    let elements
    // Fetches a payment intent and captures the client secret
    async function initialize() {
        const {
            clientSecret
        } = await fetch("<?php echo base_url(); ?>Payment/createPaymentIntent", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                items: payment_items
            }),
        }).then((r) => r.json());

        elements = stripe.elements({
            clientSecret
        });

        const paymentElementOptions = {
            layout: "accordion",
        };

        const paymentElement = elements.create("payment", paymentElementOptions);
        paymentElement.mount("#payment-element");
    }
    // ------- UI helpers -------
    function showMessage(messageText) {
        const messageContainer = document.querySelector("#payment-message");

        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(function() {
            messageContainer.classList.add("hidden");
            messageContainer.textContent = "";
        }, 4000);
    }
    // Show a spinner on payment submission
    function setLoading(isLoading) {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector("#payment-submit").disabled = true;
            document.querySelector("#payment-spinner").classList.remove("hidden");
            document.querySelector("#payment-button-text").classList.add("hidden");
        } else {
            document.querySelector("#payment-submit").disabled = false;
            document.querySelector("#payment-spinner").classList.add("hidden");
            document.querySelector("#payment-button-text").classList.remove("hidden");
        }
    }
    // payment end //

    function setLang(lang) {
        var page_status = "<?php echo $this->session->userdata("page_status") ?>"
        let sub_url = ""
        switch (page_status) {
            case "signin":
            case "signup":
            case "help":
                sub_url = "PtLogin"
                break
            case "verify":
                sub_url = "Verify"
                break
            case "theclinic":
                sub_url = "TheClinic"
                break
            case "orientation":
                sub_url = "Orientation"
                break
            case "home":
                sub_url = "Home"
                break
            case "vault":
                sub_url = "Vault"
                break
            case "aboutus":
                sub_url = "AboutUs"
                break
            case "contact":
                sub_url = "Contact"
                break
            case "insurance":
                sub_url = "Insurances"
                break
            case "services":
                sub_url = "Services"
                break
            case "letters":
                sub_url = "Letters"
                break
            case "privacy_policy":
                sub_url = "Privacy_policy"
                break
            case "terms_of_use":
                sub_url = "Terms_of_use"
                break
            case "community_resources":
                sub_url = "CommunityResources"
                break
            default:
                sub_url = page_status
        }
        $.ajax({
            url: '<?php echo base_url() ?>' + sub_url + '/setLang',
            method: "POST",
            data: {
                language: lang
            },
            dataType: "text",
            success: function(data) {
                location.reload();
            }
        });
    }

    function sendContactform() {
        const isPt = parseInt('<?php echo $patient_info['id']; ?>');

        var errors = "";
        var app_name = isPt > 0 ? '<?php echo $patient_info['fname'] . " " . $patient_info['lname']; ?>' : $("#contact_name").val()
        var app_email_address = isPt > 0 ? '<?php echo $patient_info['email']; ?>' : $("#contact_email").val()
        var app_date = isPt > 0 ? '<?php echo $patient_info['dob']; ?>' : $("#contact_dob").val()
        var app_subject = $("#contact_subject").val();
        var app_message = $("#contact_message").val();
        var app_captcha = $("#contact_captcha").val();
        var cel = isPt > 0 ? '<?php echo $patient_info['phone']; ?>' : $("#contact_cel").val()

        if (cel) {
            cel = cel.replace('-', '')
            cel = cel.replace(' ', '')
            if (cel.length > 6) {
                cel = cel.slice(0, 6) + '-' + cel.slice(6)
            }
            if (cel.length > 4) {
                cel = cel.slice(0, 4) + '-' + cel.slice(4)
            }
        }

        if (!app_name) {
            errors += '<?php echo $component_text['m_invalid_name'] ?>';
        } else if (!app_email_address) {
            errors += '<?php echo $component_text['m_invalid_email'] ?>';
        } else if (!app_date) {
            errors += '<?php echo $component_text['m_invalid_dob'] ?>';
        } else if (!app_subject) {
            errors += '<?php echo $component_text['m_invalid_subject'] ?>';
        } else if (!app_message) {
            errors += '<?php echo $component_text['m_invalid_message'] ?>';
        } else if (!app_captcha) {
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
            $("#contactsubmitbtn").prop("disabled", true);
            var encrypt = new JSEncrypt();
            encrypt.setPublicKey(`<?php echo $this->config->item('public_key') ?>`);
            $.ajax({
                method: "POST",
                url: '<?php echo base_url() ?>' + 'Home/submit',
                data: {
                    contact_name: encrypt.encrypt(app_name),
                    contact_email: encrypt.encrypt(app_email_address),
                    contact_cel: encrypt.encrypt(cel),
                    contact_dob: encrypt.encrypt(app_date),
                    contact_captcha: encrypt.encrypt($("#contact_captcha").val()),
                    contact_lang: `<?php echo $this->session->userdata('language'); ?>`,
                    contact_subject: $('#contact_subject').val(),
                    contact_message: $('#contact_message').val(),
                    contact_time: $('#contact_time').val(),
                    opt_status: $('input[name="opt_status"]:checked').val(),
                    contactpttype: $('input[name="contactpttype"]:checked').val(),
                    contactusertype: $('input[name="contactusertype"]:checked').val(),
                    contactreason: $('input[name="contactreason"]:checked').val()
                },
                dataType: "json",
                success: function(data) {
                    if (data.status == 'success') {
                        Swal.fire({
                            title: '<?php echo $component_text['c_case'] ?>' + '#: ' + data.id + '<?php echo $acronym ?>',
                            text: '<?php echo $component_text['t_contact_result_success'] ?>',
                            icon: 'success',
                        });
                    } else {
                        Swal.fire({
                            title: '<?php echo $component_text['c_error'] ?>',
                            text: data.status,
                            icon: 'error',
                        });
                        $('#contact_captcha_image').attr('src', '<?php echo base_url() ?>' + data.captcha)
                    }
                    $("#appointment_form")[0].reset();
                }
            });
        }
    }

    $(document).ready(function() {
        // payment confirm button
        $(document).on("click", "#payment-submit", async function(e) {
            e.preventDefault();
            
            const name = $("#payment-name").val()
            const email = $("#payment-email").val()
            const phone = $("#payment-phone").val()

            if (!name) {
                showMessage("⚠️ Please enter your name!")
                return
            }
            if (!email) {
                showMessage("⚠️ Please enter your email!")
                return
            }
            if (!phone) {
                showMessage("⚠️ Please enter your phone number!")
                return
            }
            
            setLoading(true);

            const {
                error,
                paymentIntent
            } = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    payment_method_data: {
                        billing_details: {
                            name: name,
                            email: email,
                            phone: phone,
                        }
                    },
                    // Make sure to change this to your payment completion page
                    return_url: "<?php echo base_url() ?>Services",
                },
                redirect: "if_required",
            });

            // This point will only be reached if there is an immediate error when
            // confirming the payment. Otherwise, your customer will be redirected to
            // your `return_url`. For some payment methods like iDEAL, your customer will
            // be redirected to an intermediate site first to authorize the payment, then
            // redirected to the `return_url`.
            if (error) {
                if (error.type === "card_error" || error.type === "validation_error") {
                    showMessage(error.message);
                } else {
                    showMessage("An unexpected error occurred.");
                }
            } else {
                switch (paymentIntent.status) {
                    case "succeeded":
                        Swal.fire({
                            title: '<?php echo $component_text['c_success'] ?>',
                            text: '<?php echo $component_text['t_payment_success'] ?>',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        })

                        $("#payment-modal").css({
                            "display": "none"
                        })
                        break;
                    case "processing":
                        showMessage("⏳ Payment is processing.")
                        break;
                    case "requires_payment_method":
                        showMessage("❌ Payment failed. Please try again.")
                        break;
                    default:
                        showMessage("⚠️ Unexpected payment status: " + paymentIntent.status)
                        break;
                }

                // send to backend
                const entry = {
                    payment_id: paymentIntent.id,
                    amount: paymentIntent.amount / 100,
                    currency: paymentIntent.currency,
                    payment_method: paymentIntent.payment_method,
                    status: paymentIntent.status,
                    category: $("#payment-category").val(),
                    category_id: $("#payment-category-id").val()
                }

                $.post({
                    url: '<?php echo base_url() ?>Payment/paymentResult',
                    method: 'POST',
                    data: entry,
                    dataType: 'text',
                    success: function(res) {}
                })
            }

            setLoading(false);
        })


        function mynotify(type, message) {
            Swal.fire({
                text: message,
                icon: type,
                confirmButtonText: 'Close'
            })
        }

        $("#timetable").css('height', 0);
        needPopup.init();

        $(".popup").click(() => {
            var popup = document.getElementById("alert-details")
            popup.classList.toggle("show")
        })

        $("#patient-info").click(() => {
            $("#info-manage-modal").css({
                'display': 'block'
            })
        })

        $("#info_edit_btn").click(() => {
            $("#info-manage-modal").css({
                'display': 'none'
            })

            $("#epatient_id").val('<?php echo $patient_info['patient_id'] ?>')
            $("#efname").val('<?php echo $patient_info['fname'] ?>')
            $("#emname").val('<?php echo $patient_info['mname'] ?>')
            $("#elname").val('<?php echo $patient_info['lname'] ?>')
            $("#ephone").val('<?php echo $patient_info['phone'] ?>')
            $("#emobile").val('<?php echo $patient_info['mobile'] ?>')
            $("#eemail").val('<?php echo $patient_info['email'] ?>')
            $("#eaddress").val('<?php echo $patient_info['address'] ?>')
            $("#ecity").val('<?php echo $patient_info['city'] ?>')
            $("#estate").val('<?php echo $patient_info['state'] ?>')
            $("#ezip").val('<?php echo $patient_info['zip'] ?>')
            $("#egender").val('<?php echo $patient_info['gender'] ?>')
            $("#edob").val('<?php echo $patient_info['dob'] ?>')
            $("#elanguage").val('<?php echo $patient_info['language'] ?>')
            $("#eethnicity").val('<?php echo $patient_info['ethnicity'] ?>')
            $("#erace").val('<?php echo $patient_info['race'] ?>')
            $('#patient_active').prop('checked', true)

            $('#person_info_modal').css({
                'display': 'block'
            })
        })

        $(document).on("click", "button[data-dismiss='modal']", function() {
            if ($(this).parent().parent().parent().parent().prop('id')) {
                $(this).parent().parent().parent().parent().css({
                    'display': 'none'
                })
            } else if ($(this).parent().parent().parent().parent().parent().parent().prop('id')) {
                $(this).parent().parent().parent().parent().parent().parent().css({
                    'display': 'none'
                })
            }
        })

        $(".personeditsubmitbtn").click(() => {
            var data = {
                id: "<?php echo $patient_info['id'] ?>",
                patient_id: $("#epatient_id").val(),
                fname: $("#efname").val(),
                mname: $("#emname").val(),
                lname: $("#elname").val(),
                phone: $("#ephone").val(),
                mobile: $("#emobile").val(),
                email: $("#eemail").val(),
                address: $("#eaddress").val(),
                city: $("#ecity").val(),
                state: $("#estate").val(),
                zip: $("#ezip").val(),
                gender: $("#egender").val(),
                dob: $("#edob").val(),
                language: $("#elanguage").val(),
                ethnicity: $("#eethnicity").val(),
                race: $("#erace").val(),
                status: $('#patient_active').prop('checked') == true ? 1 : 0
            };
            $.ajax({
                url: '<?php echo base_url() ?>local/Patient/update',
                type: 'post',
                data: data,
                dataType: "text",
                success: function(data) {
                    if (data == 'ok') {
                        mynotify('success', 'Your information has saved successfully!');
                    } else {
                        mynotify('error', 'Action Failed!');
                    }
                }
            });
        })

        $("#info_pwd_reset_btn").click(() => {
            $("#info-manage-modal").css({
                'display': 'none'
            })

            $("#new-password").val("")
            $("#re-password").val("")

            $("#pwd_reset_modal").css({
                'display': 'block'
            })
        })

        $("#info_edit_comm").click(() => {
            $("#info-manage-modal").css({
                'display': 'none'
            })

            $("#opt_in_out_modal").css({
                'display': 'block'
            })
        })

        $('#pt_opt_more_info_btn').click(function(e) {
            e.preventDefault();
            if ($('#pt_opt_moreinfo').hasClass('d-none')) {
                $('#pt_opt_moreinfo').removeClass('d-none');
                $('#pt_opt_more_info_btn').text("<?php echo '<< ' . $component_text['t_opt_less_info']; ?>");
            } else {
                $('#pt_opt_moreinfo').addClass('d-none');
                $('#pt_opt_more_info_btn').text("<?php echo $component_text['t_opt_more_info'] . ' >>'; ?>");
            }
        })

        $(".resetpwdbtn").click(function() {
            if ($("#new-password").val() == "") {
                mynotify('error', 'Please enter password');
            } else if ($("#new-password").val() != $("#re-password").val()) {
                mynotify('error', 'Please check password again');
            } else {
                $.ajax({
                    url: '<?php echo base_url() ?>local/Patient/resetpwd',
                    type: 'post',
                    data: {
                        id: "<?php echo $patient_info['id'] ?>",
                        pwd: $("#new-password").val()
                    },
                    dataType: "text",
                    success: function(data) {
                        if (data == "ok") {
                            mynotify('success', 'Password Reset Success');
                        } else {
                            mynotify('error', 'Password Reset Fail');
                        }
                    }
                });
            }
        });

        $('#footer_captcha_change').click(() => {
            $.post({
                url: '<?php echo base_url() ?>Home/changeCaptchaImageForFooter',
                method: 'POST',
                data: {},
                dataType: 'text',
                success: function(res) {
                    $('#footer_captcha_image').attr('src', '<?php echo base_url() ?>' + res)
                }
            })
        })

        $("#footer_singup_btn").click(function() {
            if (!$("#footer_first_name").val() || !$("#footer_last_name").val() || !$("#footer_dob").val()) {
                Swal.fire({
                    title: '<?php echo $component_text['c_warning'] ?> ',
                    text: '<?php echo $component_text['t_pa_ah_invalid'] ?>',
                    icon: 'warning',
                    confirmButtonText: '<?php echo $component_text['c_item_close'] ?>'
                })
                return
            }
            if (!$("#footer_email").val()) {
                Swal.fire({
                    title: '<?php echo $component_text['c_warning'] ?> ',
                    text: '<?php echo $component_text['m_invalid_email'] ?>',
                    icon: 'warning',
                    confirmButtonText: '<?php echo $component_text['c_item_close'] ?>'
                })
                return
            }

            $.post({
                url: '<?php echo base_url() ?>Home/submitSignUpForFooter',
                method: 'POST',
                data: {
                    first_name: $("#footer_first_name").val(),
                    last_name: $("#footer_last_name").val(),
                    dob: $("#footer_dob").val(),
                    email: $("#footer_email").val(),
                    phone: $("#footer_phone").val(),
                    captcha: $("#footer_captcha").val()
                },
                dataType: 'json',
                success: function(res) {
                    if (res.message == "success") {
                        Swal.fire({
                            title: '<?php echo $component_text['c_case'] ?> # : ' + res.id + res.acronym,
                            text: '<?php echo $component_text['t_pa_su_alert_success'] ?>',
                            icon: 'success',
                            confirmButtonText: '<?php echo $component_text['c_item_close'] ?>'
                        })
                    } else if (res.message == "exist") {
                        Swal.fire({
                            title: '<?php echo $component_text['c_warning'] ?>',
                            text: '<?php echo $component_text['t_pa_su_alert_exist'] ?>',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        })
                    } else if (res.message == "required") {
                        Swal.fire({
                            title: '<?php echo $component_text['c_warning'] ?>',
                            text: '<?php echo $component_text['t_invalid_info'] ?>',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        })
                    } else if (res.message == "captcha") {
                        Swal.fire({
                            title: '<?php echo $component_text['c_error'] ?>',
                            text: '<?php echo $component_text['c_alert_incorrect_captcha'] ?>',
                            icon: 'error',
                            confirmButtonText: '<?php echo $component_text['c_item_close'] ?>'
                        })
                    } else if (res.message == "error") {
                        Swal.fire({
                            title: '<?php echo $component_text['c_error'] ?>',
                            text: '<?php echo $component_text['t_pa_su_alert_failed'] ?>',
                            icon: 'error',
                            confirmButtonText: '<?php echo $component_text['c_item_close'] ?>'
                        })
                    }
                }
            })
        })

        $(document).on('click', '.modal-trigger', function() {
            $('.needpopup_wrapper').css('z-index', 1000);
        })
        $("#clock").click(function() {
            if (parseInt($("#timetable").css('height')) != 0)
                $("#timetable").css('height', 0);
            else {
                var height = $("#timetable_content").height() + parseInt($("#timetable_content").css('padding-top')) *
                    2;
                $("#timetable").css('height', height);
            }
        })
    })
</script>