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

        .scroll-y {
            overflow-y: scroll !important;
        }
    </style>
    <style>
        #make_appointment_toggle_wrapper {
            position: relative;
        }

        #make_appointment_toggle {
            background-color: #091D3E;
            color: white;
            padding: 10px;
            width: 200px;
            text-align: center;
        }

        #make_appointment_toggle:hover {
            cursor: pointer;
            filter: brightness(1.2);
        }

        #contact_form_wrapper {
            background-color: #091D3E;
            overflow-y: hidden;
            transition: height 1s ease;
        }

        p {
            padding-top: 10px;
        }

        #home_opt_moreinfo p {
            color: white !important;
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
            <?php include('header.php'); ?>

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <!-- Services -->
                                <?php if (count($services) > 0): ?>
                                    <div class="owl-carousel owl-theme none cursor-resize wow fadeInUp" data-margin="30" data-tablet="2" data-mobile="1">
                                        <?php for ($i = 0; $i < count($services); $i++): ?>
                                            <div class="service-card-item">
                                                <div class="bordered round-xl w-95 static-body">
                                                    <div class="ribbon ribbon-end ribbon-clip" style="min-height: 150px;">
                                                        <div class="ribbon-label <?php if ($services[$i]['cost'] > 0) echo "bg-danger";
                                                                                    else echo "bg-success"; ?> text-white">
                                                            <?php if ($services[$i]['cost'] > 0) echo "$" . $services[$i]['cost'];
                                                            else echo$component_text["c_health_plan_elig"]; ?>
                                                            <span class="ribbon-inner text-secondary"></span>
                                                        </div>
                                                        <img src="<?php echo base_url(); ?>assets/service/image/<?php echo $services[$i]['image']; ?>" class="w-100 round-top-xl" />
                                                    </div>
                                                    <div class="w-100 text-center d-flex justify-content-center align-items-center" style="min-height: 80px;">
                                                        <div class="mb-2" data-id="<?php echo $services[$i]['id']; ?>">
                                                            <p class="pt-2" style="font-size: 21px;"><?php echo $services[$i]['title']; ?></p>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <a href="javascript:;" class="text-primary service_request" style="font-size: 18px;" data-id="<?php echo $services[$i]['id']; ?>" data-title="<?php echo $services[$i]['title']; ?>"><?php echo $component_text['t_request_service'] ?></a>
                                                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                                                <a href="<?php echo base_url(); ?>Services/detail?s=<?php echo $services[$i]['key']; ?>" target="_blank" style="font-size: 18px;"><?php echo $component_text['btn_read_more']; ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor ?>
                                    </div>
                                <?php endif ?>
                                <!-- SLIDER -->
                                <div class="rev_slider_wrapper fullwidthbanner-container">
                                    <div id="rev-slider2" class="rev_slider fullwidthabanner">
                                        <ul>
                                            <?php for ($i = 0; $i < count($HEADER_BANNER); $i++): ?>
                                                <li data-transition="random">
                                                    <!-- Main Image -->
                                                    <img src="<?php echo base_url() ?>assets/images/pageimgs/<?php echo $HEADER_BANNER[$i]['img'] ?>" alt="image" data-bgposition="center center" data-no-retina>

                                                    <!-- Layers -->

                                                    <div class="tp-caption tp-resizeme slide-font-2 " data-x="['left','left','left','center']" data-hoffset="['5','5','15','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" data-fontsize="['45','45','30','30']" data-lineheight="['45','45','30','30']"
                                                        data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                                                        <div class="p-5 col-12 col-md-9">
                                                            <div style="height:30%; font-size:36px;" class="d-flex align-items-center">
                                                                <?php echo $HEADER_BANNER[$i]['title']; ?>
                                                            </div>
                                                            <div style="height:70%; font-size:18px;" class="d-flex align-items-center mt-3">
                                                                <?php echo $HEADER_BANNER[$i]['desc']; ?>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </li>
                                            <?php endfor ?>
                                        </ul>
                                    </div>
                                </div>

                                <section style="margin-top:-50px;">
                                    <div id="make_appointment_toggle_wrapper" class="offset-2">
                                        <div id="make_appointment_toggle">
                                            <?php echo $component_text['t_make_an_appointment'] ?>
                                        </div>
                                    </div>
                                    <div id="contact_form_wrapper" class="container-fluid d-flex justify-content-center">
                                        <div class="form-contact-us fl-st-title" style="width:85%;">
                                            <div id="contact_form" class="d-none">
                                                <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:106px"></div>
                                                <div class="title-heading text-color-white">
                                                    <?php echo $component_text['menu_contact'] ?>
                                                </div>
                                                <h3 class=" text-color-white" style="margin-bottom: 30px;"><?php echo $component_text['t_contact_desc'] ?></h3>
                                                <p class="error" id="error" style="display:none;"></p>
                                                <p class="success" id="success" style="display:none;"></p>
                                                <form class="w-100 content-form wow fadeInUp" id="appointment_form" action="#" method="post" accept-charset="utf-8" novalidate="novalidate" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div style="text-align: left;">
                                                        <div style="font-size:18px; color:white; margin:10px;"><?php echo $component_text['t_contact_user_desc'] ?> (*):</div>
                                                        <input type="radio" value="1" class="contactusertype" name="contactusertype" checked><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_option_patient'] ?></span>
                                                        <input type="radio" value="2" class="contactusertype" name="contactusertype" class="ml-2"><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_option_business'] ?></span><br>
                                                        <input type="radio" value="1" class="contactpttype-patient" name="contactpttype" checked><span class="contactpttype-patient" style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_option_existing'] ?></span>
                                                        <input type="radio" value="2" class="contactpttype-patient" name="contactpttype" class="ml-2"><span class="contactpttype-patient" style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_option_new'] ?></span>
                                                        <input type="radio" value="3" class="contactpttype-institution" name="contactpttype"><span class="contactpttype-institution" style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_option_patient'] ?></span>
                                                        <input type="radio" value="4" class="contactpttype-institution" name="contactpttype" class="ml-2"><span class="contactpttype-institution" style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_option_generalmsg'] ?></span><br>

                                                        <div style="font-size:18px; color:white; margin:10px;"><?php echo $component_text['t_contact_reason'] ?> (*) :</div>
                                                        <input type="radio" value="Appointment Request" name="contactreason" checked><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_reason_1'] ?></span><br>
                                                        <input type="radio" value="Letter Request" name="contactreason"><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_reason_2'] ?></span><br>
                                                        <input type="radio" value="Prescription Refill Request" name="contactreason"><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_reason_3'] ?></span><br>
                                                        <input type="radio" value="Referral Request" name="contactreason"><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_reason_4'] ?></span><br>
                                                        <input type="radio" value="Test Results Request" name="contactreason"><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_reason_5'] ?></span><br>
                                                        <input type="radio" value="General Message" name="contactreason"><span style="font-size:18px; color:white; "> <?php echo $component_text['t_contact_reason_6'] ?></span><br><br>
                                                    </div>
                                                    <div class="row" id="contact_pt_info">
                                                        <div class="col-12 col-lg-3">
                                                            <input class="input-contact" id="contact_name" type="text" name="contact_name" placeholder="<?php echo $component_text['placeholder_your_name']; ?>" required>
                                                        </div>
                                                        <div class="col-12 col-lg-3">
                                                            <input class="input-contact" id="contact_email" type="text" name="contact_email" placeholder="<?php echo $component_text['placeholder_email_address']; ?>" required>
                                                        </div>
                                                        <div class="col-12 col-lg-3">
                                                            <input class="input-contact" id="contact_cel" type="text" name="contact_cel" placeholder="<?php echo $component_text['placeholder_phone_number']; ?>" required>
                                                        </div>
                                                        <div class="col-12 col-lg-3">
                                                            <input class="input-contact" id="contact_dob" type="date" name="contact_dob" placeholder="<?php echo $component_text['placeholder_dob']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input class="input-contact" id="contact_subject" name="contact_subject" type="text" placeholder="<?php echo $component_text['placeholder_subject']; ?>">
                                                        </div>
                                                        <div class="col-12">
                                                            <textarea class="input-contact" id="contact_message" name="contact_message" placeholder="<?php echo $component_text['placeholder_message']; ?>" style="height:160px;"></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <input class="input-contact" id="contact_time" name="contact_time" type="text" placeholder="<?php echo $component_text['placeholder_besttime']; ?>">
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="my-1 text-white"><?php echo $component_text['t_opt_in_out_header']; ?></p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="my-1">
                                                                <input type="radio" name="opt_status" id="home_opt_in" value="1" checked />
                                                                <label for="home_opt_in" class="text-white"><?php echo $component_text['t_opt_in_out_in']; ?></label>
                                                            </div>
                                                            <div class="my-1">
                                                                <input type="radio" name="opt_status" id="home_opt_out" value="0" />
                                                                <label for="home_opt_out" class="text-white"><?php echo $component_text['t_opt_in_out_out']; ?></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="my-1 text-white pb-0"><?php echo $component_text['t_opt_in_out_footer']; ?></p>
                                                        </div>
                                                        <div class="col-12 d-none" id="home_opt_moreinfo">
                                                            <p class="text-white pt-0"><?php echo $component_text['t_opt_in_out_more']; ?></p>
                                                        </div>
                                                        <div class="col-12 mb-1">
                                                            <a href="#" id="home_opt_more_info_btn" class="text-white"><?php echo $component_text['t_opt_more_info']; ?> >></a>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row justify-content-center align-items-center">
                                                                <div class="col-9 col-md-4 mb-2">
                                                                    <img id="contact_captcha_image" src="<?php echo base_url() . $captcha_image ?>" alt="Captcha Image" class="w-100" />
                                                                </div>
                                                                <div class="col-3 col-md-1 mb-2" style="padding: 0px; font-size: 32px;">
                                                                    <i id="captcha_change" class="fa fa-lg fa-rotate-right text-primary" style="transform:translateY(50%); cursor: pointer;"></i>
                                                                </div>
                                                                <div class="col-12 col-md-7 mb-4">
                                                                    <input tabindex="3" id="contact_captcha" name="captcha" value="" class="input-contact" type="text" placeholder="<?php echo $component_text['placeholder_captcha']; ?>" autocomplete="new-captcha">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="contact_lang" id="contact_lang">
                                                    </div>
                                                    <div class="d-flex justify-content-end mb-5">
                                                        <button type="button" class="themesflat-button bg-accent btn-submit" onClick="sendContactform();"><span><?php echo $component_text['btn_send']; ?></span></button>
                                                    </div>
                                                </form>
                                                <!-- <div class="themesflat-spacer clearfix" data-desktop="106" data-mobile="40" data-smobile="40" style="height:106px"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php if ($area_toggle['doctor_area'] == 1): ?>
                                    <section class="fl-row our-team">
                                        <div class="container">
                                            <div class="row" style="margin-top:20px;">
                                                <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="30" data-smobile="20"></div>
                                            </div>
                                            <div class="row">
                                                <div class="<?php echo count($doctors) < 3 ? '' : 'col-md-9' ?> col-sm-12">
                                                    <div class="box-heading-ot wow fadeInDown">
                                                        <div class="title-heading text-color-title-sidebar">
                                                            <?php echo $component_text['t_doctor_title']; ?>
                                                        </div>
                                                        <div class="normal-text">
                                                            <?php echo $component_text['t_doctor_desc'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="20"></div>
                                            </div>
                                            <div class="row">
                                                <?php if (count($doctors) == 1): ?>
                                                    <?php $i = 0; ?>
                                                    <div class="row fadeInUp d-flex align-items-center" style="padding:0px;" data-wow-delay="100ms">
                                                        <div class="col-12 col-lg-4 p-0 p-lg-3 text-center">
                                                            <img style="" src="<?php echo base_url() ?>assets/images/doctors/<?php echo $doctors[$i]['img'] ?>" alt="image">
                                                        </div>
                                                        <div class="col-12 col-lg-8 mt-3 p-3">
                                                            <h2 class="name text-left text-color-title-sidebar p-3"><a href="#"><?php echo $doctors[$i]['name'] ?></a></h2>
                                                            <div style="text-align:left;" class="p-3 pdt-8"><?php echo $doctors[$i]['desc'] ?></div>
                                                            <div class="flat-read-more text-left p-3">
                                                                <a href="#" class="modal-trigger themesflat-button font-default process" data-needpopup-show="#doctor_detail_modal_<?php echo $i ?>">
                                                                    <span><?php echo $component_text['btn_read_more']; ?><i class="fa fa-arrow-right"></i> </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="10" data-smobile="10"></div>
                                                    </div>
                                                <?php elseif (count($doctors) == 2): ?>
                                                    <div class="row">
                                                        <?php for ($i = 0; $i < count($doctors); $i++): ?>
                                                            <div class="col-12 col-md-6 fadeInUp p-0 p-md-3" data-wow-delay="100ms">
                                                                <div class="p-2 p-xl-5">
                                                                    <img style="width:100%;" src="<?php echo base_url() ?>assets/images/doctors/<?php echo $doctors[$i]['img'] ?>" alt="image">
                                                                </div>
                                                                <div class="mt-3 p-3">
                                                                    <h2 class="name text-center text-color-title-sidebar"><a href="#"><?php echo $doctors[$i]['name'] ?></a></h2>
                                                                    <div style="text-align:left; padding:20px;" class="pdt-8"><?php echo $doctors[$i]['desc'] ?></div>
                                                                </div>
                                                                <div class="flat-read-more text-center">
                                                                    <a href="#" class="modal-trigger themesflat-button font-default process" data-needpopup-show="#doctor_detail_modal_<?php echo $i ?>">
                                                                        <span><?php echo $component_text['btn_read_more']; ?><i class="fa fa-arrow-right"></i> </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php endfor ?>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="owl-carousel owl-theme" data- data-desktop="3" data-tablet="2" data-mobile="1">
                                                        <?php for ($i = 0; $i < count($doctors); $i++): ?>
                                                            <div class="item box-item-carousel wow fadeInUp" data-wow-delay="100ms">
                                                                <img src="<?php echo base_url() ?>assets/images/doctors/<?php echo $doctors[$i]['img'] ?>" alt="image">
                                                                <div class="info">
                                                                    <h2 class="name text-color-title-sidebar"><a href="#"><?php echo $doctors[$i]['name'] ?></a></h2>
                                                                    <div style="text-align:left; padding:20px;" class="pdt-8"><?php echo $doctors[$i]['desc'] ?></div>
                                                                </div>
                                                                <div class="flat-read-more text-center">
                                                                    <a href="#" class="modal-trigger themesflat-button font-default process" data-needpopup-show="#doctor_detail_modal_<?php echo $i ?>">
                                                                        <span><?php echo $component_text['btn_read_more']; ?><i class="fa fa-arrow-right"></i> </span>
                                                                    </a>
                                                                </div>
                                                                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="10" data-smobile="10"></div>
                                                            </div>
                                                        <?php endfor ?>
                                                    </div><!--/owl-carousel-->
                                                <?php endif; ?>

                                            </div>
                                            <?php for ($i = 0; $i < count($doctors); $i++): ?>
                                                <div id='doctor_detail_modal_<?php echo $i ?>' class="needpopup">
                                                    <?php echo $doctors[$i]['fdesc'] ?>
                                                </div>
                                            <?php endfor ?>
                                        </div>
                                    </section>
                                <?php endif ?>
                                <?php if ($area_toggle['staff_area'] == 1): ?>
                                    <section class="fl-row our-team">
                                        <div class="container">
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="30" data-smobile="20"></div>
                                            </div>
                                            <div class="row">
                                                <div class=" <?php echo count($staffs) < 3 ? '' : 'col-md-9' ?> col-sm-12">
                                                    <div class="box-heading-ot wow fadeInDown">
                                                        <div class="title-heading text-color-title-sidebar">
                                                            <?php echo $component_text['t_staff_title'] ?>
                                                        </div>
                                                        <div class="normal-text">
                                                            <?php echo $component_text['t_staff_desc'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="20"></div>
                                            </div>
                                            <div class="row">
                                                <?php if (count($staffs) == 1): ?>
                                                    <?php $i = 0; ?>
                                                    <div class="row fadeInUp d-flex align-items-center" style="padding:0px;" data-wow-delay="100ms">
                                                        <div class="col-12 col-lg-4 p-0 p-lg-3">
                                                            <img style="width:100%;" src="<?php echo base_url() ?>assets/images/staffs/<?php echo $staffs[$i]['img'] ?>" alt="image">
                                                        </div>
                                                        <div class="col-12 col-lg-8 mt-3 p-3">
                                                            <h2 class="name text-center text-color-title-sidebar"><a href="#"><?php echo $staffs[$i]['name'] ?></a></h2>
                                                            <div style="text-align:left; padding:20px;" class="normal-text"><?php echo $staffs[$i]['desc'] ?></div>
                                                            <div class="flat-read-more text-center">
                                                                <a href="#" class="modal-trigger themesflat-button font-default process" data-needpopup-show="#staff_detail_modal_<?php echo $i ?>">
                                                                    <span><?php echo $component_text['btn_read_more']; ?><i class="fa fa-arrow-right"></i> </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="10" data-smobile="10"></div>
                                                    </div>
                                                <?php elseif (count($staffs) == 2): ?>
                                                    <div class="row">
                                                        <?php for ($i = 0; $i < count($staffs); $i++): ?>
                                                            <div class="col-12 col-md-6 fadeInUp p-0 p-md-3" style="padding:0px;" data-wow-delay="100ms">
                                                                <div class="p-2 p-xl-5">
                                                                    <img style="width:100%;" src="<?php echo base_url() ?>assets/images/staffs/<?php echo $staffs[$i]['img'] ?>" alt="image">
                                                                </div>
                                                                <div class="mt-3 p-3">
                                                                    <h2 class="name text-center text-color-title-sidebar"><a href="#"><?php echo $staffs[$i]['name'] ?></a></h2>
                                                                    <div style="text-align:left; padding:20px;" class="normal-text"><?php echo $staffs[$i]['desc'] ?></div>
                                                                </div>
                                                                <div class="flat-read-more text-center">
                                                                    <a href="#" class="modal-trigger themesflat-button font-default process" data-needpopup-show="#staff_detail_modal_<?php echo $i ?>">
                                                                        <span><?php echo $component_text['btn_read_more']; ?><i class="fa fa-arrow-right"></i> </span>
                                                                    </a>
                                                                </div>
                                                                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="10" data-smobile="10"></div>
                                                            </div>
                                                        <?php endfor ?>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="owl-carousel owl-theme" data- data-desktop="3" data-tablet="2" data-mobile="1">
                                                        <?php for ($i = 0; $i < count($staffs); $i++): ?>
                                                            <div class="item box-item-carousel wow fadeInUp" data-wow-delay="100ms">
                                                                <img src="<?php echo base_url() ?>assets/images/staffs/<?php echo $staffs[$i]['img'] ?>" alt="image">
                                                                <div class="info">
                                                                    <h2 class="name text-color-title-sidebar"><a href="#"><?php echo $staffs[$i]['name'] ?></a></h2>
                                                                    <div style="text-align:left; padding:20px;" class="normal-text"><?php echo $staffs[$i]['desc'] ?></div>
                                                                </div>
                                                                <div class="flat-read-more text-center">
                                                                    <a href="#" class="modal-trigger themesflat-button font-default process" data-needpopup-show="#staff_detail_modal_<?php echo $i ?>">
                                                                        <span><?php echo $component_text['btn_read_more']; ?><i class="fa fa-arrow-right"></i> </span>
                                                                    </a>
                                                                </div>
                                                                <div class="themesflat-spacer clearfix" data-desktop="20" data-mobile="10" data-smobile="10"></div>
                                                            </div>
                                                        <?php endfor ?>
                                                    </div><!--/owl-carousel-->
                                                <?php endif; ?>
                                            </div>
                                            <?php for ($i = 0; $i < count($staffs); $i++): ?>
                                                <div id='staff_detail_modal_<?php echo $i ?>' class="needpopup">
                                                    <div>Name: <?php echo $staffs[$i]['name'] ?></div>
                                                    <div>Job: <?php echo $staffs[$i]['job'] ?></div>
                                                    <?php if ($staffs[$i]['email_tel_ext_toggle'] == 1): ?>
                                                        <div>Email: <?php echo $staffs[$i]['email'] ?></div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">Tel: <?php echo $staffs[$i]['tel'] ?></div>
                                                            <div class="col-12 col-md-6">Ext: <?php echo $staffs[$i]['ext'] ?></div>
                                                        </div>
                                                    <?php endif ?>
                                                    <br>
                                                    <?php echo $staffs[$i]['fdesc'] ?>
                                                </div>
                                            <?php endfor ?>
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="30" data-smobile="20"></div>
                                            </div>
                                        </div>
                                    </section>
                                <?php endif ?>
                                <section class="testimonial">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="box-testimonial">
                                                    <div class="box-img-tt">
                                                        <img src="<?php echo base_url() ?>assets/images/common/World-Map-Free-PNG-Image.png" alt="image">
                                                    </div>
                                                    <div class="box-wrap-tt text-center pdt-39 wow fadeInUp">
                                                        <div class="title-heading wow fadeInUp pdt-8 text-left">
                                                            <?php echo $component_text['t_patient_review_title'] ?>
                                                        </div>
                                                        <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20"></div>
                                                    </div>

                                                    <?php if (count($patient_reviews) == 1): ?>
                                                        <?php $i = 0; ?>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-lg-8 item item-tt drop-sd">
                                                                <div class="row-item-tt">
                                                                    <div class="img-item">
                                                                        <img src="<?php echo base_url() ?>assets/images/patient_review/<?php echo $patient_reviews[$i]['img'] ?>" alt="image">
                                                                    </div>
                                                                    <div class="item-name">
                                                                        <h3><?php echo $patient_reviews[$i]['name'] ?></h3>
                                                                    </div>
                                                                    <div class="box-icon font-size-quote pdt-63">
                                                                        <i class="icon-quotes-24"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="box-post p-4 normal-text">
                                                                    <?php echo $patient_reviews[$i]['desc'] ?>
                                                                </div>
                                                                <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>
                                                            </div>
                                                        </div>
                                                    <?php elseif (count($patient_reviews) == 2): ?>
                                                        <div class="row">
                                                            <?php for ($i = 0; $i < count($patient_reviews); $i++): ?>
                                                                <div class="col-12 col-md-6">
                                                                    <div class="item item-tt drop-sd">
                                                                        <div class="row-item-tt">
                                                                            <div class="img-item">
                                                                                <img src="<?php echo base_url() ?>assets/images/patient_review/<?php echo $patient_reviews[$i]['img'] ?>" alt="image">
                                                                            </div>
                                                                            <div class="item-name">
                                                                                <h3><?php echo $patient_reviews[$i]['name'] ?></h3>
                                                                            </div>
                                                                            <div class="box-icon font-size-quote pdt-63">
                                                                                <i class="icon-quotes-24"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="box-post p-4 normal-text">
                                                                            <?php echo $patient_reviews[$i]['desc'] ?>
                                                                        </div>
                                                                        <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>
                                                                    </div>
                                                                </div>
                                                            <?php endfor ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="owl-carousel owl-theme none cursor-resize wow fadeInUp" data-margin="30" data-tablet="2" data-mobile="1">
                                                            <?php for ($i = 0; $i < count($patient_reviews); $i++): ?>
                                                                <div class="item item-tt drop-sd">
                                                                    <div class="row-item-tt">
                                                                        <div class="img-item">
                                                                            <img src="<?php echo base_url() ?>assets/images/patient_review/<?php echo $patient_reviews[$i]['img'] ?>" alt="image">
                                                                        </div>
                                                                        <div class="item-name">
                                                                            <h3><?php echo $patient_reviews[$i]['name'] ?></h3>
                                                                        </div>
                                                                        <div class="box-icon font-size-quote pdt-63">
                                                                            <i class="icon-quotes-24"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-post p-4 normal-text">
                                                                        <?php echo $patient_reviews[$i]['desc'] ?>
                                                                    </div>
                                                                    <div class="themesflat-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>
                                                                </div><!--/item-tt-->
                                                            <?php endfor ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="290" data-mobile="160" data-smobile="70"></div>
                                        </div>
                                    </div>
                                </section><!--/testimonial-->
                                <!--/our-team-->
                            </div>
                            <!--.page-content-->
                        </div>
                        <!--#inner-content-->
                    </div>
                    <!--site-content-->
                </div>
                <!--#content-wrap-->
            </div>
            <!--#main-content-->
            <?php include('footer.php'); ?>
        </div><!--#page-->
    </div> <!--#wrapper-->
    <!-- Javascript -->

    <!-- Modals -->
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
</body>
<script>

    let _selected_service_id = 0;
    let _selected_service_title = "";
    let _selected_service_cost = 0;
    
    $(document).ready(function() {
        const isPt = parseInt('<?php echo $patient_info['id']; ?>');
        if (isPt > 0) {
            $("#contact_pt_info").addClass("d-none");
        } else {
            $("#contact_pt_info").removeClass("d-none");
        }

        $('#contact_captcha_image').height($('#contact_captcha').outerHeight())

        $('.contactpttype-institution').addClass('d-none')
        $('.contactusertype').click((e) => {
            if (e.target.value == 1) {
                $('.contactpttype-patient').removeClass('d-none')
                $('.contactpttype-institution').addClass('d-none')
            } else if (e.target.value == 2) {
                $('.contactpttype-patient').addClass('d-none')
                $('.contactpttype-institution').removeClass('d-none')
            }
        })

        $("#make_appointment_toggle").click(function() {
            console.log($("#contact_form").hasClass("d-none"))
            if ($("#contact_form").hasClass("d-none")) {
                $("#contact_form").removeClass("d-none")
            } else {
                $("#contact_form").addClass("d-none")
            }
        });

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

        $(document).on("click", ".service_request", function() {
            _selected_service_id = $(this).attr("data-id")
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
                    $("#payment-modal-title").text(`<?php echo $component_text['t_request_service']; ?> - ${_selected_service_title}`)
                    $("#service_request_modal").css({ 'display': 'block' })
                }
            })
        })

        $("#service_request_modal_pay").click(function() {
            if (_selected_service_cost > 0) {
                $("#service_request_modal_pay").css({ 'display': 'block' })
                $("#service_payment_title").text(_selected_service_title + ` - $${_selected_service_cost}`)

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

        $(".modal-close").click(function() {
            $(".modal").css({
                'display': 'none'
            })
        })
    })
</script>

</html>