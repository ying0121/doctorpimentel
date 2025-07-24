<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        input[type="password"] {
            padding-right: 45px;
        }

        input[type="password"]:focus {
            padding-right: 45px;
        }
    </style>
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

                                <section style="background-color: #091D3E;">
                                    <div class="container-fluid d-flex justify-content-center">
                                        <div class="form-contact-us fl-st-title" style="width:700px; padding:20px;">
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:106px"></div>
                                            <div class="title-heading text-color-white">
                                                <?php if ($this->session->userdata('page_status') == 'signin'): ?>
                                                    <i class="mr-3 fas fa-lock"></i><?php echo $component_text['t_pa_si_signin']; ?>
                                                <?php elseif ($this->session->userdata('page_status') == 'signup'): ?>
                                                    <i class="mr-3 fas fa-user-plus"></i><?php echo $component_text['t_pa_su_signup']; ?>
                                                <?php elseif ($this->session->userdata('page_status') == 'help'): ?>
                                                    <i class="mr-3 fas fa-mail-bulk"></i><?php echo $component_text['t_pa_su_account']; ?>
                                                <?php endif ?>
                                            </div>
                                            <div class="text-color-white">
                                                <?php if ($this->session->userdata('page_status') == 'help'): ?>
                                                    <?php echo $component_text['t_pa_ah_hques'] ?>
                                                <?php elseif ($this->session->userdata('page_status') == 'verify'): ?>
                                                    <?php echo $component_text['t_pa_ah_rpheader'] ?>
                                                <?php else: ?>
                                                    <?php echo $component_text['t_pa_si_welcome'] ?>
                                                <?php endif ?>
                                            </div>
                                            <?php if ($this->session->userdata('loginresult')): ?>
                                                <div style="color:red; font-weight:bold;" class="my-2">
                                                    <?php echo $this->session->userdata('loginresult')[$this->session->userdata('language')] ?><?php echo $this->session->userdata('loginresult')['count'] ?>
                                                </div>
                                                <?php $this->session->unset_userdata('loginresult'); ?>
                                            <?php endif ?>
                                            <?php if ($this->session->userdata('helpresult')): ?>
                                                <?php if ($this->session->userdata('page_status') == 'help'): ?>
                                                    <div style="color:red; font-weight:bold;" class="my-2">
                                                        <?php echo $this->session->userdata('helpresult') ?>
                                                    </div>
                                                    <?php $this->session->unset_userdata('helpresult'); ?>
                                                <?php endif ?>
                                            <?php endif ?>
                                            <?php if ($this->session->userdata('signupresult')): ?>
                                                <?php if ($this->session->userdata('page_status') == 'signup'): ?>
                                                    <div style="color:red; font-weight:bold;" class="my-2">
                                                        <?php echo $this->session->userdata('signupresult') ?>
                                                    </div>
                                                    <?php $this->session->unset_userdata('signupresult') ?>
                                                <?php endif ?>
                                            <?php endif ?>
                                            <!-- Alert Begin -->
                                            <?php if ($this->session->userdata('alert_message')): ?>
                                                <script>
                                                    $(document).ready(() => {
                                                        showAlert('<?php echo $this->session->userdata('case_number') ?><?php echo $this->session->userdata('acronym') ?>', '<?php echo $this->session->userdata('alert_message') ?>', '<?php echo $this->session->userdata('alert_status') ?>')
                                                    })
                                                </script>
                                                <?php $this->session->unset_userdata('alert_message') ?>
                                                <?php $this->session->unset_userdata('alert_status') ?>
                                            <?php endif ?>
                                            <!-- Alert End -->
                                            <!-- Page Begin -->
                                            <?php if ($this->session->userdata('page_status') == 'signin'): ?>
                                                <!-- Security Begin -->
                                                <?php if ($security == 0): ?>
                                                    <form class="content-form wow fadeInUp mt-3" id="" action="<?php base_url() ?>PtLogin/login" method="post" accept-charset="utf-8" novalidate="novalidate" style="visibility: visible; animation-name: fadeInUp;">
                                                        <input tabindex="1" id="name" name="email" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_login_name']; ?>" required="" autocomplete="new-username">
                                                        <div class="d-flex justify-content-between">
                                                            <input tabindex="3" id="password" name="password" value="" class="input-contact" type="password" placeholder="<?php echo $component_text['placeholder_password']; ?>" required="" autocomplete="new-password">
                                                            <span class="input-contact" style="height: 100%; align-items: center; transform: translateY(50%); margin-left: -100%;">
                                                                <span id="eye" style="cursor: pointer; margin-left: -50%;"><i class="fa fa-lg fa-eye"></i></span>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex justify-content-end">
                                                            <button name="action" value="help" class="btn btn-link"><?php echo $component_text['t_pa_ah_help']; ?></button>
                                                            <button name="action" value="signup" class="btn bg-accent btn-link" role="button"><span><?php echo $component_text['btn_signup']; ?></span></button>
                                                            <button name="action" value="signin" class="btn bg-accent btn-submit mx-3" role="button"><span><?php echo $component_text['btn_login']; ?></span></button>
                                                        </div>
                                                    </form>
                                                <?php elseif ($security == 1): ?>
                                                    <form class="content-form wow fadeInUp mt-3" id="" action="<?php base_url() ?>checkSecurity" method="post" accept-charset="utf-8" novalidate="novalidate" style="visibility: visible; animation-name: fadeInUp;">
                                                        <div class="text-color-white mb-3"><?php echo $this->session->userdata('question')[$this->session->userdata('language')] ?></div>
                                                        <div class="d-flex justify-content-between">
                                                            <input tabindex="1" id="password" name="answer" value="" class="input-contact" type="password" placeholder="<?php echo $component_text['placeholder_answer_security']; ?>" required="" autocomplete="new-username">
                                                            <span class="input-contact" style="height: 100%; align-items: center; transform: translateY(50%); margin-left: -100%;">
                                                                <span id="eye" style="cursor: pointer; margin-left: -50%;"><i class="fa fa-lg fa-eye"></i></span>
                                                            </span>
                                                        </div>
                                                        <div class="d-flex justify-content-end">
                                                            <button name="submit" id="submit" type="submit" class="btn bg-accent btn-submit btn-lg mx-3" role="button"><span><?php echo $component_text['btn_login']; ?></span></button>
                                                        </div>
                                                    </form>
                                                <?php endif ?>
                                                <!-- Security End -->
                                            <?php elseif ($this->session->userdata('page_status') == 'help'): ?>
                                                <form class="content-form wow fadeInUp mt-3" action="<?php base_url() ?>submitToHelp" method="post" accept-charset="utf-8" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="row">
                                                        <div class="col-6 mb-3">
                                                            <input id="forgot_account" type="radio" value="1" class="forgot_type" name="forgot_type" checked>
                                                            <label for="forgot_account" class="text-white"><?php echo $component_text['t_pa_ah_facc'] ?></label>
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <input id="forgot_password" type="radio" value="2" class="forgot_type" name="forgot_type">
                                                            <label for="forgot_password" class="text-white"><?php echo $component_text['t_pa_ah_fpwd'] ?></label>
                                                        </div>
                                                        <div class="col-6 forgot-account">
                                                            <input tabindex="1" id="first_name" name="first_name" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_first_name']; ?>" autocomplete="new-firstname">
                                                        </div>
                                                        <div class="col-6 forgot-account">
                                                            <input tabindex="2" id="last_name" name="last_name" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_last_name']; ?>" autocomplete="new-lastname">
                                                        </div>
                                                        <div class="col-12 forgot-account">
                                                            <input tabindex="3" id="dob" name="dob" value="" class="input-contact" type="date" placeholder="<?php echo $component_text['placeholder_dob']; ?>" autocomplete="new-dob">
                                                        </div>
                                                        <div class="col-12 forgot-password d-none">
                                                            <input tabindex="2" id="email" name="email" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_login_name']; ?>" autocomplete="new-lastname">
                                                        </div>
                                                        <div class="col-4 forgot-password d-none">
                                                            <img id="help_captcha_image" src="<?php echo base_url() . $captcha_image ?>" alt="Captcha Image" class="w-100" />
                                                        </div>
                                                        <div class="col-1 forgot-password d-none" style="padding: 0px; font-size: 32px;">
                                                            <i id="captcha_change" class="fa fa-lg fa-rotate-right text-primary" style="transform:translateY(50%); cursor: pointer;"></i>
                                                        </div>
                                                        <div class="col-7 forgot-password d-none">
                                                            <input tabindex="3" id="captcha" name="captcha" value="" class="input-contact" type="password" placeholder="<?php echo $component_text['placeholder_captcha']; ?>" autocomplete="new-captcha">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button name="action" value="signin" class="btn bg-accent btn-link mx-3" role="button"><span><?php echo $component_text['link_sign_in']; ?></span></button>
                                                        <button name="action" value="submit" class="btn bg-accent btn-submit" role="button"><span><?php echo $component_text['btn_submit']; ?></span></button>
                                                    </div>
                                                </form>
                                            <?php elseif ($this->session->userdata('page_status') == 'signup'): ?>
                                                <form class="content-form wow fadeInUp mt-3" action="<?php base_url() ?>submitSignUp" method="post" accept-charset="utf-8" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input tabindex="1" id="first_name" name="first_name" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_first_name']; ?>" autocomplete="new-firstname">
                                                        </div>
                                                        <div class="col-6">
                                                            <input tabindex="2" id="last_name" name="last_name" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_last_name']; ?>" autocomplete="new-lastname">
                                                        </div>
                                                        <div class="col-12">
                                                            <input tabindex="3" id="dob" name="dob" value="" class="input-contact" type="date" placeholder="<?php echo $component_text['placeholder_dob']; ?>" autocomplete="new-dob">
                                                        </div>
                                                        <div class="col-12">
                                                            <input tabindex="1" id="email" name="email" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_email']; ?>" autocomplete="new-email">
                                                        </div>
                                                        <div class="col-12">
                                                            <input tabindex="2" id="phone" name="phone" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_phone']; ?>" autocomplete="new-phone">
                                                        </div>
                                                        <div class="col-4">
                                                            <img id="help_captcha_image" src="<?php echo base_url() . $captcha_image ?>" alt="Captcha Image" class="w-100" />
                                                        </div>
                                                        <div class="col-1" style="padding: 0px; font-size: 32px;">
                                                            <i id="captcha_change" class="fa fa-lg fa-rotate-right text-primary" style="transform:translateY(50%); cursor: pointer;"></i>
                                                        </div>
                                                        <div class="col-7">
                                                            <input tabindex="3" id="captcha" name="captcha" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_captcha']; ?>" autocomplete="new-captcha">
                                                        </div>

                                                        <div class="col-12">
                                                            <p class="my-1 text-white"><?php echo $component_text['t_opt_in_out_header']; ?></p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="my-1">
                                                                <input type="radio" name="opt_status" id="home_opt_in" checked />
                                                                <label for="home_opt_in" class="text-white"><?php echo $component_text['t_opt_in_out_in']; ?></label>
                                                            </div>
                                                            <div class="my-1">
                                                                <input type="radio" name="opt_status" id="home_opt_out" />
                                                                <label for="home_opt_out" class="text-white"><?php echo $component_text['t_opt_in_out_out']; ?></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="my-1 text-white pb-0"><?php echo $component_text['t_opt_in_out_footer']; ?></p>
                                                        </div>
                                                        <div class="col-12 d-none" id="home_opt_moreinfo">
                                                            <br>
                                                            <p class="text-white pt-0"><?php echo $component_text['t_opt_in_out_more']; ?></p>
                                                        </div>
                                                        <div class="col-12 mb-1">
                                                            <a href="#" id="home_opt_more_info_btn" class="text-white"><?php echo $component_text['t_opt_more_info']; ?> >></a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button name="action" value="signin" class="btn bg-accent btn-link mx-3" role="button"><span><?php echo $component_text['link_sign_in']; ?></span></button>
                                                        <button name="action" value="submit" class="btn bg-accent btn-submit" role="button"><span><?php echo $component_text['btn_submit']; ?></span></button>
                                                    </div>
                                                </form>
                                            <?php elseif ($this->session->userdata('page_status') == 'verify'): ?>
                                                <form class="content-form wow fadeInUp mt-3" action="<?php base_url() ?>/verify/<?php echo $verify_link ?>/submit" method="post" accept-charset="utf-8" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="d-flex justify-content-between">
                                                                <input tabindex="1" id="password" name="password" value="" class="input-contact" type="password" placeholder="<?php echo $component_text['placeholder_password']; ?>" autocomplete="new-firstname">
                                                                <span class="input-contact" style="height: 100%; align-items: center; transform: translateY(50%); margin-left: -100%;">
                                                                    <span id="eye" style="cursor: pointer; margin-left: -50%;"><i class="fa fa-lg fa-eye"></i></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex justify-content-between">
                                                                <input tabindex="2" id="repassword" name="repassword" value="" class="input-contact" type="password" placeholder="<?php echo $component_text['placeholder_confirm_password']; ?>" autocomplete="new-lastname">
                                                                <span class="input-contact" style="height: 100%; align-items: center; transform: translateY(50%); margin-left: -100%;">
                                                                    <span id="eye2" style="cursor: pointer; margin-left: -50%;"><i class="fa fa-lg fa-eye"></i></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <ul class="one-half first">
                                                                <li>
                                                                    <span><i id="verify_pwd_length" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "8 to 72 characters";
                                                                                                else echo "De 8 a 72 caracteres"; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span><i id="verify_pwd_lower" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "At least one Lowercase letter (a,b,c...)";
                                                                                                else echo "Al menos una letra minúscula (a,b,c...)"; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span><i id="verify_pwd_upper" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "At least one Uppercase letter (A,B,C...)";
                                                                                                else echo "Al menos una letra mayúscula (A,B,C...)"; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span><i id="verify_pwd_number" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "At least one Number (1,2,3...)";
                                                                                                else echo "Al menos un número (1,2,3...)"; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span><i id="verify_pwd_special" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "At least one Special character (@,_,#,*...)";
                                                                                                else echo "Al menos un carácter especial (@,_,#,*...)"; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span><i id="verify_pwd_sequential" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "Not be sequential numbers";
                                                                                                else echo "No sean números secuenciales"; ?></span>
                                                                </li>
                                                                <li>
                                                                    <span><i id="verify_pwd_repeat" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "Not be repeating numbers, letters, special characters";
                                                                                                else echo "No repetir números, letras, caracteres especiales"; ?></span>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <span><i id="verify_pwd_match" class="verify-icons fa fa-warning text-warning"></i></span>
                                                                    <span class="text-white"><?php if ($this->session->userdata('language') == 'en') echo "Matched password";
                                                                                                else echo "Contraseña coincidente"; ?></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button name="action" value="signin" class="btn bg-accent btn-link mx-3" role="button"><span><?php echo $component_text['link_sign_in']; ?></span></button>
                                                        <button id="password_submit" name="action" value="submit" class="btn bg-accent btn-submit" role="button" status="disable" disabled><span><?php echo $component_text['btn_submit']; ?></span></button>
                                                    </div>
                                                </form>
                                            <?php endif ?>
                                            <!-- Page End -->
                                            <div class="text-color-white mt-4">
                                                <?php echo $component_text['t_pa_pr_footer'] ?>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:106px"></div>
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
    function showAlert(title, message, type) {
        if (title) {
            Swal.fire({
                title: "<?php echo $component_text['c_case'] ?> #: " + title,
                text: message,
                icon: type,
                confirmButtonText: 'Close'
            })
        } else {
            Swal.fire({
                text: message,
                icon: type,
                confirmButtonText: 'Close'
            })
        }
    }

    $(document).ready(function() {
        $('#help_captcha_image').height($('#captcha').outerHeight())

        $('#captcha').val('')

        $('.forgot_type').change(function() {
            const selectedValue = $(this).val()
            if (selectedValue === '1') {
                $('.forgot-password').addClass('d-none')
                $('.forgot-account').removeClass('d-none')
            } else if (selectedValue === '2') {
                $('.forgot-password').removeClass('d-none')
                $('.forgot-account').addClass('d-none')
            }
        })

        $('#eye').click(() => {
            if ($('#password').attr('type') === 'password') {
                $('#password').attr('type', 'text')
                $('#eye').html(`<i class="fa fa-lg fa-eye-slash"></i>`)
            } else {
                $('#password').attr('type', 'password')
                $('#eye').html(`<i class="fa fa-lg fa-eye"></i>`)
            }
        })

        $('#eye2').click(() => {
            if ($('#repassword').attr('type') === 'password') {
                $('#repassword').attr('type', 'text')
                $('#eye2').html(`<i class="fa fa-lg fa-eye-slash"></i>`)
            } else {
                $('#repassword').attr('type', 'password')
                $('#eye2').html(`<i class="fa fa-lg fa-eye"></i>`)
            }
        })

        $('#captcha_change').click(() => {
            $.post({
                url: '<?php echo base_url() ?>PtLogin/changeCaptchaImage',
                method: 'POST',
                data: {},
                dataType: 'text',
                success: function(res) {
                    $('#help_captcha_image').attr('src', '<?php echo base_url() ?>' + res)
                }
            })
        })

        $(document).on('input', '#password', e => {
            var password = e.target.value
            if (password.length == 0) {
                $('.verify-icons').addClass("fa-warning text-warning")
                $('.verify-icons').removeClass("fa-check text-success")

                $('#password_submit').attr("status", "disable")
                $('#password_submit').prop("disabled", true)
            } else {
                const length = password.length
                const numberCount = (password.match(/[0-9]/g) || []).length
                const lowerCaseCount = (password.match(/[a-z]/g) || []).length
                const upperCaseCount = (password.match(/[A-Z]/g) || []).length
                const specCharacterCount = (password.match(/[^a-zA-Z0-9]/g) || []).length
                const sequentialCharacter = /(?:01|12|23|34|45|56|67|78|89)/i.test(password)
                const repeatCharacter = /(.)\1{1,}/.test(password)

                if (length >= 8 && length <= 72) { // password length
                    $('#verify_pwd_length').removeClass("fa-warning text-warning")
                    $('#verify_pwd_length').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_length').addClass("fa-warning text-warning")
                    $('#verify_pwd_length').removeClass("fa-check text-success")
                }
                if (numberCount >= 1) { // more than one number
                    $('#verify_pwd_number').removeClass("fa-warning text-warning")
                    $('#verify_pwd_number').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_number').addClass("fa-warning text-warning")
                    $('#verify_pwd_number').removeClass("fa-check text-success")
                }
                if (lowerCaseCount >= 1) { // more than one lowercase letter
                    $('#verify_pwd_lower').removeClass("fa-warning text-warning")
                    $('#verify_pwd_lower').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_lower').addClass("fa-warning text-warning")
                    $('#verify_pwd_lower').removeClass("fa-check text-success")
                }
                if (upperCaseCount >= 1) { // more than one uppercase letter
                    $('#verify_pwd_upper').removeClass("fa-warning text-warning")
                    $('#verify_pwd_upper').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_upper').addClass("fa-warning text-warning")
                    $('#verify_pwd_upper').removeClass("fa-check text-success")
                }
                if (specCharacterCount >= 1) { // more than one special character
                    $('#verify_pwd_special').removeClass("fa-warning text-warning")
                    $('#verify_pwd_special').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_special').addClass("fa-warning text-warning")
                    $('#verify_pwd_special').removeClass("fa-check text-success")
                }
                if (sequentialCharacter == false) { // sequential numbers
                    $('#verify_pwd_sequential').removeClass("fa-warning text-warning")
                    $('#verify_pwd_sequential').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_sequential').addClass("fa-warning text-warning")
                    $('#verify_pwd_sequential').removeClass("fa-check text-success")
                }
                if (repeatCharacter == false) { // repeat characters
                    $('#verify_pwd_repeat').removeClass("fa-warning text-warning")
                    $('#verify_pwd_repeat').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_repeat').addClass("fa-warning text-warning")
                    $('#verify_pwd_repeat').removeClass("fa-check text-success")
                }

                // change button status
                if ((length >= 8 && length <= 72) && numberCount >= 1 && lowerCaseCount >= 1 && upperCaseCount >= 1 && specCharacterCount >= 1 && sequentialCharacter == false && repeatCharacter == false) {
                    $('#password_submit').attr("status", "enable")
                } else {
                    $('#password_submit').attr("status", "disable")
                }

                // enable or disable submit button
                if ($('#password_submit').attr("status") == "enable" && $("#repassword").val() == password) {
                    $('#password_submit').prop("disabled", false)
                } else {
                    $('#password_submit').prop("disabled", true)
                }

                // match with repassword
                if ($('#repassword').val() == password) {
                    $('#verify_pwd_match').removeClass("fa-warning fa-times-circle text-danger text-warning")
                    $('#verify_pwd_match').addClass("fa-check text-success")
                } else {
                    $('#verify_pwd_match').addClass("fa-warning fa-times-circle text-danger text-warning")
                    $('#verify_pwd_match').removeClass("fa-check text-success")
                    if ($('#repassword').val().length == 0) {
                        $('#verify_pwd_match').removeClass("fa-check fa-times-circle text-danger text-success")
                        $('#verify_pwd_match').addClass("fa-warning text-warning")
                    }
                }
            }
        })

        $(document).on('input', '#repassword', e => {
            var password = e.target.value
            if (password.length == 0) {
                $('#verify_pwd_match').removeClass("fa-check fa-times-circle text-danger text-success")
                $('#verify_pwd_match').addClass("fa-warning text-warning")
                $('#password_submit').prop("disabled", true)
            } else if ($('#password').val() == password) {
                $('#verify_pwd_match').removeClass("fa-warning fa-times-circle text-danger text-warning")
                $('#verify_pwd_match').addClass("fa-check text-success")
                if ($('#password_submit').attr("status") == "enable") {
                    $('#password_submit').prop("disabled", false)
                } else {
                    $('#password_submit').prop("disabled", true)
                }
            } else {
                $('#verify_pwd_match').addClass("fa-warning fa-times-circle text-danger text-warning")
                $('#verify_pwd_match').removeClass("fa-check text-success")

                $('#password_submit').prop("disabled", true)
            }
        })

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

        $('#password').keydown(function(event) {
            if (event.which === 13) { // Enter key
                event.preventDefault(); // Prevent the default action (if needed)
            }
        });
    })
</script>

</html>