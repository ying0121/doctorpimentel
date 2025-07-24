<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
</head>

<body class="counter-scroll header_sticky">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="wrapper">
        <div id="page">
            <?php include('header.php') ?>
            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

                                <section class="box-service-details">
                                    <div class="container">
                                        <div id="contact_form_wrapper" class="container-fluid d-flex justify-content-center">
                                            <div class="fl-st-title" style="width:100%;">
                                                <div id="contact_form">
                                                    <div class="title-heading" style="color: black; margin-top: 10px;">
                                                        <?php echo $component_text['menu_contact'] ?>
                                                    </div>
                                                    <h3 style="margin-bottom: 30px;"><?php echo $component_text['t_contact_desc'] ?></h3>
                                                    <p class="error" id="error" style="display:none;"></p>
                                                    <p class="success" id="success" style="display:none;"></p>
                                                    <form class="content-form wow fadeInUp" id="appointment_form" action="#" method="post" accept-charset="utf-8" novalidate="novalidate" style="visibility: visible; animation-name: fadeInUp;">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div style="text-align: left;">
                                                                    <div style="font-size:18px; margin:10px;"><?php echo $component_text['t_contact_user_desc'] ?> (*):</div>
                                                                    <input type="radio" value="1" name="contactusertype" id="t_contact_option_patient" checked>
                                                                    <label for="t_contact_option_patient"><?php echo $component_text['t_contact_option_patient'] ?></label>
                                                                    <input type="radio" value="2" name="contactusertype" class="ml-2" id="t_contact_option_business">
                                                                    <label for="t_contact_option_business"><?php echo $component_text['t_contact_option_business'] ?></label><br>
                                                                    <input type="radio" value="1" name="contactpttype" class="contactpttype-patient" checked id="t_contact_option_existing">
                                                                    <label for="t_contact_option_existing"><?php echo $component_text['t_contact_option_existing'] ?></label>
                                                                    <input type="radio" value="2" name="contactpttype" class="contactpttype-patient ml-2" id="t_contact_option_new">
                                                                    <label for="t_contact_option_new"><?php echo $component_text['t_contact_option_new'] ?></label><br>

                                                                    <div style="font-size:18px; margin:10px;"><?php echo $component_text['t_contact_reason'] ?> (*) :</div>
                                                                    <input type="radio" value="Appointment Request" name="contactreason" checked id="t_contact_reason_1">
                                                                    <label for="t_contact_reason_1"><?php echo $component_text['t_contact_reason_1'] ?></label><br>
                                                                    <input type="radio" value="Letter Request" name="contactreason" checked id="t_contact_reason_2">
                                                                    <label for="t_contact_reason_2"><?php echo $component_text['t_contact_reason_2'] ?></label><br>
                                                                    <input type="radio" value="Prescription Refill Request" name="contactreason" checked id="t_contact_reason_3">
                                                                    <label for="t_contact_reason_3"><?php echo $component_text['t_contact_reason_3'] ?></label><br>
                                                                    <input type="radio" value="Referral Request" name="contactreason" checked id="t_contact_reason_4">
                                                                    <label for="t_contact_reason_4"><?php echo $component_text['t_contact_reason_4'] ?></label><br>
                                                                    <input type="radio" value="Test Results Request" name="contactreason" checked id="t_contact_reason_5">
                                                                    <label for="t_contact_reason_5"><?php echo $component_text['t_contact_reason_5'] ?></label><br>
                                                                    <input type="radio" value="General Message" name="contactreason" checked id="t_contact_reason_6">
                                                                    <label for="t_contact_reason_6"><?php echo $component_text['t_contact_reason_6'] ?></label><br>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row" id="contact_pt_info">
                                                                    <div class="col-lg-3 col-sm-12">
                                                                        <input class="input-contact" id="contact_name" type="text" name="contact_name" placeholder="<?php echo $component_text['placeholder_your_name']; ?>" required>
                                                                    </div>
                                                                    <div class="col-lg-3 col-sm-12">
                                                                        <input class="input-contact" id="contact_email" type="text" name="contact_email" placeholder="<?php echo $component_text['placeholder_email_address']; ?>" required>
                                                                    </div>
                                                                    <div class="col-lg-3 col-sm-12">
                                                                        <input class="input-contact" id="contact_cel" type="text" name="contact_cel" placeholder="<?php echo $component_text['placeholder_phone_number']; ?>" required>
                                                                    </div>
                                                                    <div class="col-lg-3 col-sm-12">
                                                                        <input class="input-contact" id="contact_dob" type="date" name="contact_dob" placeholder="<?php echo $component_text['placeholder_dob']; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <input class="input-contact" id="contact_subject" name="contact_subject" type="text" placeholder="<?php echo $component_text['placeholder_subject']; ?>">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <textarea class="input-contact" id="contact_message" name="contact_message" placeholder="<?php echo $component_text['placeholder_message']; ?>" style="height:200px;"></textarea>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input class="input-contact" id="contact_time" name="contact_time" type="text" placeholder="<?php echo $component_text['placeholder_besttime']; ?>">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p class="my-1"><?php echo $component_text['t_opt_in_out_header']; ?></p>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="my-1">
                                                                            <input type="radio" value="1" name="opt_status" id="home_opt_in" checked />
                                                                            <label for="home_opt_in"><?php echo $component_text['t_opt_in_out_in']; ?></label>
                                                                        </div>
                                                                        <div class="my-1">
                                                                            <input type="radio" value="0" name="opt_status" id="home_opt_out" />
                                                                            <label for="home_opt_out"><?php echo $component_text['t_opt_in_out_out']; ?></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p class="my-1 pb-0"><?php echo $component_text['t_opt_in_out_footer']; ?></p>
                                                                    </div>
                                                                    <div class="col-12 d-none" id="home_opt_moreinfo">
                                                                        <p><?php echo $component_text['t_opt_in_out_more']; ?></p>
                                                                    </div>
                                                                    <div class="col-12 mb-1 pt-0">
                                                                        <a href="#" id="home_opt_more_info_btn"><?php echo $component_text['t_opt_more_info']; ?> >></a>
                                                                    </div>
                                                                    <div class="col-2"></div>
                                                                    <div class="col-10">
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <img id="contact_captcha_image" src="<?php echo base_url() . $captcha_image ?>" alt="Captcha Image" class="w-100" />
                                                                            </div>
                                                                            <div class="col-1" style="padding: 0px; font-size: 32px;">
                                                                                <i id="captcha_change" class="fa fa-lg fa-rotate-right text-primary" style="transform:translateY(50%); cursor: pointer;"></i>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <input tabindex="3" id="contact_captcha" name="captcha" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_captcha']; ?>" autocomplete="new-captcha">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="contact_lang" id="contact_lang">
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <button type="button" class="themesflat-button bg-accent btn-submit" onClick="sendContactform();"><span><?php echo $component_text['btn_send']; ?></span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="themesflat-spacer clearfix" data-desktop="106" data-mobile="40" data-smobile="40" style="height:106px"></div>
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
</body>

<script>
    $(document).ready(function() {
        const isPt = parseInt('<?php echo $patient_info['id']; ?>');
        if (isPt > 0) {
            $("#contact_pt_info").addClass("d-none");
        } else {
            $("#contact_pt_info").removeClass("d-none");
        }

        $('#contact_captcha_image').height($('#contact_captcha').outerHeight())

        $('#timetable_wrapper').addClass('d-none')

        $('#home_opt_more_info_btn').click(function(e) {
            e.preventDefault();
            if ($('#home_opt_moreinfo').hasClass('d-none')) {
                $('#home_opt_moreinfo').removeClass('d-none');
                $('#home_opt_more_info_btn').text("<?php echo '<< ' . $component_text['t_opt_less_info']; ?>");
            } else {
                $('#home_opt_moreinfo').addClass('d-none');
                $('#home_opt_more_info_btn').text("<?php echo $component_text['t_opt_more_info'] . ' >>'; ?>");
            }
        })

        $('#captcha_change').click(() => {
            $.post({
                url: '<?php echo base_url() ?>PtLogin/changeCaptchaImage',
                method: 'POST',
                data: {},
                dataType: 'text',
                success: function(res) {
                    $('#contact_captcha_image').attr('src', '<?php echo base_url() ?>' + res)
                }
            })
        })
    })
</script>

</html>