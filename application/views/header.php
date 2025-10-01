<style>
    .menu-scroll-y {
    }

    @media (max-width: 1024px) {
        .menu-scroll-y {
            overflow-y: scroll;
            height: 360px;
        }
    }
</style>
<header class="header downscrolled clearfix box-down-shadow">
    <div id="header" style="border-bottom: 3px solid #00aebd;">
        <div class="d-flex justify-content-end justify-content-md-center align-items-center py-2 px-2 px-xl-4 px-md-3">
            <div class="d-flex align-items-center">
                <p style="padding:0px 10px 0px 10px;" class="d-none d-md-block"><i class="fa fa-phone"></i> :
                    <?php echo $contact_info['tel'] ?></p>
                <p style="border-left: 1px solid rgb(9,29,62); border-right:1px solid rgb(9,29,62); padding:0px 10px 0px 10px;"
                    class="d-none d-xl-block"><?php echo $component_text['t_topbar_emergency_call'] ?></p>
                <p style="padding:0px 10px 0px 10px;" class="d-none d-lg-block"><?php echo $contact_info['email'] ?></p>
                <?php if ($contact_info["portal_show"] == 1): ?>
                    <a href="#" class="themesflat-button font-default process px-3 mx-1"><span><?php echo $component_text['link_portal'] ?></span></a>
                <?php endif ?>
                <?php if ($area_toggle['vault_area']): ?>
                    <?php if ($this->session->userdata('patient_id') == '' || $this->session->userdata('patient_name') == null): ?>
                        <a href="<?php echo base_url() ?>PtLogin"
                            class="themesflat-button font-default process px-3 mx-1"><span><?php echo $component_text['link_sign_in']; ?></span></a>
                    <?php else: ?>
                        <a href="<?php echo base_url() ?>PtLogin/logout"
                            class="themesflat-button font-default process px-3 mx-1"><span><?php echo $component_text['link_sign_out']; ?></span></a>
                    <?php endif ?>
                <?php endif ?>
            </div>
            <div class="d-flex ml-1">
                <div class="d-flex align-items-center">
                    <div class="btn btn-secondary p-1 langbtn <?php echo $this->session->userdata('language') == 'en' ? 'active' : '' ?>"
                        onclick="setLang('en');">
                        <img src="<?php echo base_url() ?>assets/images/flags/en.png"
                            style="width: 20px; height: 20px;" />
                    </div>
                    <div class="btn btn-secondary p-1 langbtn <?php echo $this->session->userdata('language') == 'en' ? '' : 'active' ?>"
                        onclick="setLang('es');">
                        <img src="<?php echo base_url() ?>assets/images/flags/es.png"
                            style="width: 20px; height: 20px;" />
                    </div>
                    <?php if ($this->session->userdata('patient_id') > 0): ?>
                        <div class="d-flex justify-content-center align-items-center mx-3">
                            <span id="patient-info" class="text-white bg-primary d-flex justify-content-center align-items-center cursor-pointer" style="font-size: xx-large; border-radius: 999px; width: 45px; height: 45px;"><?php echo $patient_info['fname'][0] ?></span>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div id="site-header">
            <div class="d-flex align-items-center pl-4">
                <a href="#">
                    <img src="<?php echo base_url() ?>assets/images/logo.png" alt="image" style="width:250px;">
                </a>
            </div>
            <!-- //mobile menu button -->
            <div class="nav-wrap col-lg-10 d-flex align-items-center">
                <nav id="mainnav" class="mainnav">
                    <ul class="menu menu-scroll-y">
                        <li>
                            <a href="<?php echo base_url() ?>"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_home'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>TheClinic"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_the_clinic'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>AboutUs"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_about_us'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>Services"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_services'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>Letters"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_letters'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>Orientation"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_orientation'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>CommunityResources"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_community_resources'] ?></a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" style="text-wrap:nowrap;"><?php echo $component_text['menu_education'] ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url() ?>education/Asthma"><?php echo $component_text['menu_asthma'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/AyeVision"><?php echo $component_text['menu_aye_vision'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/Cholesterol"><?php echo $component_text['menu_cholesterol'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/Diabietes"><?php echo $component_text['menu_diabietes'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/DrugAbuse"><?php echo $component_text['menu_drug_abuse'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/Nutrition"><?php echo $component_text['menu_nutrition'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/Pain"><?php echo $component_text['menu_pain'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/PainBack"><?php echo $component_text['menu_pain_back'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/PulmonaryDisease"><?php echo $component_text['menu_pulmonary_disease'] ?></a></li>
                                <li><a href="<?php echo base_url() ?>education/TobaccoTreatment"><?php echo $component_text['menu_tobacco_treatment'] ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>Insurances" style="text-wrap:nowrap;"><?php echo $component_text['menu_insurances'] ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>Contact"
                                style="text-wrap:nowrap;"><?php echo $component_text['menu_contact'] ?></a>
                        </li>
                        <?php if (($this->session->userdata('patient_id') != '' && $this->session->userdata('patient_name') != null)): ?>
                            <li>
                                <a href="<?php echo base_url() ?>Vault"
                                    style="text-wrap:nowrap;"><?php echo $component_text['menu_vault'] ?></a>
                            </li>
                        <?php endif ?>
                    </ul>
                    <!-- /.menu -->
                </nav>
            </div>
            <!-- /#mainnav -->
            <div class="btn-menu">
                <span></span>
            </div>
        </div>
        <?php if (count($alerts) > 0): ?>
            <div class="row justify-content-center pb-3">
                <?php
                $cookie_data = json_decode(get_cookie('alert'), true);
                if ($cookie_data && ($cookie_data['title'] == $alerts[0]['title'] && $cookie_data['id'] == $alerts[0]['id']) && $alerts[0]['type'] == 'once'):
                ?>
                <?php elseif (date('Y-m-d H:i:s', strtotime($alerts[0]['end'])) >= date('Y-m-d H:i:s') && $alerts[0]['status'] == 1): ?>
                    <div class="col-md-9">
                        <p id="alert-title" class="alert-title mb-3 text-danger">
                            <?php if (count($alerts) > 0) {
                                if ($this->session->userdata('language') == "en") echo $alerts[0]['title'];
                                else echo $alerts[0]['title_es'];
                            } ?>
                        </p>
                        <span id="alert-message" class="alert-message text-danger">
                            <?php if (count($alerts) > 0) {
                                if ($this->session->userdata('language') == "en") echo $alerts[0]['message'];
                                else echo $alerts[0]['message_es'];
                            } ?>
                        </span>
                        <div class="popup text-light-primary ml-10"><?php echo $component_text['btn_read_more'] ?> >>
                            <span class="popuptext" id="alert-details">
                                <div class="row pt-2">
                                    <?php if ($alerts[0]["image"] != ""): ?>
                                        <div class="alert-image-container col-md-6 d-flex justify-content-center align-items-center">
                                            <img class="alert-image" src="<?php echo base_url() ?>/assets/images/alerts/<?php echo $alerts[0]["image"] ?>" width="100%" />
                                        </div>
                                    <?php endif ?>
                                    <div class="<?php if ($alerts[0]["image"] == "") echo "col-md-12";
                                                else echo "col-md-6" ?> align-items-center">
                                        <h3 class="text-white py-2" style="font-size: xx-large;">
                                            <?php if ($this->session->userdata('language') == "en") echo $alerts[0]["title"];
                                            else echo $alerts[0]["title_es"];
                                            ?>
                                        </h3>
                                        <h3 class="text-white py-2" style="font-size: larger;">
                                            <?php if ($this->session->userdata('language') == "en") echo $alerts[0]["message"];
                                            else echo $alerts[0]["message_es"];
                                            ?>
                                        </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="text-white py-4" style="font-size: large;">
                                            <?php if ($this->session->userdata('language') == "en") echo $alerts[0]["description"];
                                            else echo $alerts[0]["description_es"];
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                <?php endif ?>
                <?php
                $expireTime = (new DateTime($alerts[0]['end']))->getTimestamp() - time();
                $this->input->set_cookie(array(
                    "name" => "alert",
                    "value" => json_encode(array(
                        "title" => $alerts[0]['title'],
                        "message" => $alerts[0]['message'],
                        "id" => $alerts[0]['id'],
                    )),
                    "expire" => $expireTime,
                    "domain" => "",
                    "path" => "/",
                    "prefix" => "",
                    "secure" => false
                ));
                ?>
            </div>
        <?php endif ?>
    </div>
</header>
<div style="position:relative;">
    <div id="timetable_wrapper">
        <div id="timetable">
            <div id="timetable_content">
                <div class="title-heading" style="font-size:25px; color:white!important;">
                    <?php echo $component_text['t_working_hour'] ?>
                </div>
                <?php for ($i = 0; $i < count($working_hours); $i++): ?>
                    <div class="mx-4" style="color:white!important;">
                        <i class="fa fa-check mr-3"></i><?php echo $working_hours[$i]['name']; ?> :
                        <?php echo $working_hours[$i]['time']; ?>
                        <hr class="my-3">
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div id="clock">
            <img src="<?php echo base_url() ?>assets/images/timetable-menu.png">
        </div>
    </div>
</div>
<div class="box">
</div>

<?php if ($this->session->userdata('patient_id') > 0): ?>
    <div class="modal modal-fade" tabindex="-1" role="dialog" aria-hidden="true" id="info-manage-modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12 d-flex justify-content-center" style="margin-bottom: 42px;">
                            <h6 class="p-2"><?php echo $patient_info['email'] ?></h6>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center mb-3">
                            <span class="bg-success text-white d-flex justify-content-center align-items-center" style="font-size: 48px; width: 72px; height: 72px; border-radius: 999px;">
                                <?php echo $patient_info['fname'][0] ?>
                            </span>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center" style="margin-bottom: 42px;">
                            <h3><?php echo $component_text['c_item_hello'] ?> <?php echo $patient_info['fname'] . ' ' . $patient_info['lname'] ?></h3>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button class="btn btn-link btn-primary" id="info_edit_btn"><?php echo $component_text['c_item_edit_info'] ?></button>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button class="btn btn-link btn-primary" id="info_pwd_reset_btn"><?php echo $component_text['c_item_reset_pwd'] ?></button>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button class="btn btn-link btn-primary" id="info_edit_comm"><?php echo $component_text['c_item_edit_comm'] ?></button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger" data-dismiss="modal"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-fade" id="person_info_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title "><?php echo $component_text['c_item_edit_info'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <h6>Patient ID</h6>
                                <input id='epatient_id' class="form-control-sm" type="text" required />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h6>First Name</h6>
                                <input id='efname' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h6>Middle Name</h6>
                                <input id='emname' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h6>Last Name</h6>
                                <input id='elname' class="form-control-sm" type="text" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h6>Phone</h6>
                                <input id='ephone' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6>Mobile</h6>
                                <input id='emobile' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6>Email</h6>
                                <input id='eemail' class="form-control-sm" type="text" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h6>Address</h6>
                                <input id='eaddress' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <h6>City</h6>
                                <input id='ecity' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <h6>State</h6>
                                <input id='estate' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <h6>Zip</h6>
                                <input id='ezip' class="form-control-sm" type="text" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <h6>Gender</h6>
                                <select id='egender' class="form-control-sm" type="text">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6>DOB</h6>
                                <input type="date" id='edob' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <h6>Language</h6>
                                <select id="elanguage" class="form-control-sm">
                                    <?php for ($i = 0; $i < count($languages); $i++): ?>
                                        <option value="<?php echo $languages[$i]['code'] ?>"><?php echo $languages[$i]['English'] ?></option>
                                    <?php endfor ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <h6>Ethnicity</h6>
                                <input id='eethnicity' class="form-control-sm" type="text" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <h6>Race</h6>
                                <input id='erace' class="form-control-sm" type="text" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center"><input type="checkbox" id="patient_active" style="width:24px; height:24px;"></div>
                            <div class="mr-1">&nbsp;&nbsp;Active</div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-light-primary personeditsubmitbtn" data-dismiss="modal"><?php echo $component_text['c_item_done'] ?></button>
                            <button type="button" class="btn btn-light-danger" data-dismiss="modal"><?php echo $component_text['c_item_close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-fade" id="pwd_reset_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title "><?php echo $component_text['c_item_reset_pwd'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h6><?php echo $component_text['c_item_new_pwd'] ?></h6>
                                <input name='pwd' id='new-password' class="form-control-sm" type="password" required autocomplete="new-password" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h6><?php echo $component_text['placeholder_confirm_password'] ?></h6>
                                <input name='cpwd' id='re-password' class="form-control-sm" type="password" required autocomplete="new-password" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary resetpwdbtn" data-dismiss="modal"><?php echo $component_text['c_item_done'] ?></button>
                    <button type="button" class="btn btn-light-danger" data-dismiss="modal"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-fade" id="opt_in_out_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title "><?php echo $component_text['c_item_comm'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="my-1"><?php echo $component_text['t_opt_in_out_header']; ?></p>
                        </div>
                        <div class="col-md-12">
                            <div class="my-1">
                                <input type="radio" value="1" name="opt_status" id="pt_opt_in" checked />
                                <label for="pt_opt_in"><?php echo $component_text['t_opt_in_out_in']; ?></label>
                            </div>
                            <div class="my-1">
                                <input type="radio" value="0" name="opt_status" id="pt_opt_out" />
                                <label for="pt_opt_out"><?php echo $component_text['t_opt_in_out_out']; ?></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="my-1 pb-0"><?php echo $component_text['t_opt_in_out_footer']; ?></p>
                        </div>
                        <div class="col-md-12 d-none" id="pt_opt_moreinfo">
                            <p><?php echo $component_text['t_opt_in_out_more']; ?></p>
                        </div>
                        <div class="col-md-12 mb-1 pt-0">
                            <a href="#" id="pt_opt_more_info_btn"><?php echo $component_text['t_opt_more_info']; ?> >></a>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary" data-dismiss="modal"><?php echo $component_text['c_item_done'] ?></button>
                    <button type="button" class="btn btn-light-danger" data-dismiss="modal"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<style>
    .popuptext .row .alert-image-container .alert-image {
        visibility: hidden !important;
    }

    .show .row .alert-image-container .alert-image {
        visibility: visible !important;
    }

    .ml-10 {
        margin-left: 10px !important;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .langbtn {
        border-radius: 0px;
    }

    .langbtn:hover {
        background-color: #33B9CB;
    }

    #clock:hover {
        cursor: pointer;
        filter: brightness(90%);
        transition: filter 0.5s ease;
    }

    #timetable {
        overflow-y: hidden;
        transition: height 1s ease;
    }

    #timetable_content {
        color: white;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.4);
        background-color: #02adc6;
        padding: 20px;
    }

    #timetable_wrapper {
        position: absolute;
        right: 15%;
        display: flex;
        flex-direction: column;
        align-items: end;
        z-index: 900;
    }

    .menu-item-has-children:hover {
        z-index: 999;
    }

    .needpopup {
        color: #091D3E;
    }

    .normal-text {
        color: #091D3E !important;
    }

    .alert-title {
        font-size: xx-large;
    }

    .alert-message {
        font-size: x-large;
    }

    /* Popup container - can be anything you want */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* The actual popup */
    .popup .popuptext {
        visibility: hidden;
        width: 480px;
        background-color: #303030C0;
        color: #fff;
        text-align: center;
        border-radius: 12px;
        padding: 12px 12px;
        position: absolute;
        z-index: 1;
        top: 100%;
        left: 50%;
        margin-left: -240px;
    }

    /* Toggle this class - hide and show the popup */
    .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .modal-fade {
        height: 100%;
        transform: translateY(50px);
        animation: fadeUp 0.5s forwards;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(50px);
        }
    }

    .form-control-sm {
        height: 40px !important;
    }

    .mx-n5 {
        margin-left: -1.25rem;
        margin-right: -1.25rem;
    }

    .mx-n6 {
        margin-left: -1.5rem;
        margin-right: -1.5rem;
    }

    .h-80 {
        height: 80%;
    }

    .h-90 {
        height: 90%;
    }
</style>
<!-- payment style -->
<style>
    /* Variables */
    .payment-container {
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
    }

    form {
        width: 100%;
        align-self: center;
        border-radius: 7px;
        padding: 5px;
        margin-top: auto;
        margin-bottom: auto;
    }

    .hidden {
        display: none;
    }

    #payment-message {
        color: rgb(105, 115, 134);
        font-size: 16px;
        line-height: 20px;
        padding-top: 12px;
        text-align: center;
    }

    #payment-element {
        margin-bottom: 24px;
    }

    /* Buttons and links */
    .payment-button {
        background: #0055DE;
        font-family: Arial, sans-serif;
        color: #ffffff;
        border-radius: 4px;
        border: 0;
        padding: 12px 16px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: block;
        transition: all 0.2s ease;
        box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
        width: 100%;
    }

    .payment-button:hover {
        filter: contrast(115%);
    }

    .payment-button:disabled {
        opacity: 0.5;
        cursor: default;
    }

    /* spinner/processing state, errors */
    .spinner,
    .spinner:before,
    .spinner:after {
        border-radius: 50%;
    }

    .spinner {
        color: #ffffff;
        font-size: 22px;
        text-indent: -99999px;
        margin: 0px auto;
        position: relative;
        width: 20px;
        height: 20px;
        box-shadow: inset 0 0 0 2px;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
    }

    .spinner:before,
    .spinner:after {
        position: absolute;
        content: "";
    }

    .spinner:before {
        width: 10.4px;
        height: 20.4px;
        background: #0055DE;
        border-radius: 20.4px 0 0 20.4px;
        top: -0.2px;
        left: -0.2px;
        -webkit-transform-origin: 10.4px 10.2px;
        transform-origin: 10.4px 10.2px;
        -webkit-animation: loading 2s infinite ease 1.5s;
        animation: loading 2s infinite ease 1.5s;
    }

    .spinner:after {
        width: 10.4px;
        height: 10.2px;
        background: #0055DE;
        border-radius: 0 10.2px 10.2px 0;
        top: -0.1px;
        left: 10.2px;
        -webkit-transform-origin: 0px 10.2px;
        transform-origin: 0px 10.2px;
        -webkit-animation: loading 2s infinite ease;
        animation: loading 2s infinite ease;
    }

    /* Payment status page */
    #payment-status {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        row-gap: 30px;
        width: 30vw;
        min-width: 500px;
        min-height: 380px;
        align-self: center;
        box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
            0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
        border-radius: 7px;
        padding: 40px;
        opacity: 0;
        animation: fadeInAnimation 1s ease forwards;
    }

    #status-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }

    .payment-h2 {
        margin: 0;
        color: #30313D;
        text-align: center;
    }

    .payment-a {
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        font-family: Arial, sans-serif;
        display: block;
    }

    .payment-a:hover {
        filter: contrast(120%);
    }

    #details-table {
        overflow-x: auto;
        width: 100%;
    }

    .payment-table {
        width: 100%;
        font-size: 14px;
        border-collapse: collapse;
    }

    .payment-table tbody tr:first-child td {
        border-top: 1px solid #E6E6E6;
        /* Top border */
        padding-top: 10px;
    }

    .payment-table tbody tr:last-child td {
        border-bottom: 1px solid #E6E6E6;
        /* Bottom border */
    }

    td {
        padding-bottom: 10px;
    }

    .TableContent {
        text-align: right;
        color: #6D6E78;
    }

    .TableLabel {
        font-weight: 600;
        color: #30313D;
    }

    #view-details {
        color: #0055DE;
    }

    #retry-button {
        text-align: center;
        background: #0055DE;
        color: #ffffff;
        border-radius: 4px;
        border: 0;
        padding: 12px 16px;
        transition: all 0.2s ease;
        box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
        width: 100%;
    }

    @-webkit-keyframes loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes fadeInAnimation {
        to {
            opacity: 1;
        }
    }

    @media only screen and (max-width: 600px) {

        form,
        #payment-status {
            width: 80vw;
            min-width: initial;
        }
    }
</style>