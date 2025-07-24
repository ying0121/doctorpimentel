<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('includes.php'); ?>
    <style>
        #header-text-box{

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
        <?php $img_id = rand(0, count($HEADER_BANNER) - 1);?>
        <div id="header-baner" style="background-image: url('<?php echo base_url()?>assets/images/pageimgs/<?php echo $HEADER_BANNER[$img_id]['img']?>')">
            <div class="container d-flex align-items-center" style="height:100%;">
                
                <div class="p-5 col-12 col-md-8">
                    <div style="height:30%; font-size:36px;" class="d-flex align-items-center">
                        <?php echo $HEADER_BANNER[$img_id]['title'];?>
                    </div>
                    <div style="height:70%; font-size:18px;" class="d-flex align-items-center mt-3">
                        <?php echo $HEADER_BANNER[$img_id]['desc'];?>
                    </div>
                </div>
                    
            </div>
        </div>

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="page-content">
                            <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="themesflat-spacer clearfix" data-desktop="70" data-mobile="30" data-smobile="30"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 <?php echo $area_toggle['clinic_map'] ? 'col-lg-6' : 'col-lg-12' ?>">
                                            <div class="title-heading pdbt-30">
                                                <?php echo $component_text['menu_the_clinic']?>
                                            </div>
                                            <?php if($area_toggle['clinic_desc'] == 1): ?>
                                            <div class="text-color-title-sidebar">
                                                <?php echo $component_text['t_location_desc'] ?>
                                            </div class="text-color-title-sidebar">
                                            <?php endif ?>
                                            <?php if($area_toggle['clinic_contact'] == 1): ?>
                                            <div style="font-size:18px;" class="text-color-title-sidebar">
                                                <div class="d-flex align-items-center my-4">
                                                    <i class="fas fa-map-marker-alt mx-2" style="font-size:20px;"></i>
                                                    <div href="#"><?php echo ' '.$contact_info['address']." ".$contact_info['city']." ".$contact_info['state']." ".$contact_info['zip']?></div>
                                                </div>
                                                <div class="d-flex align-items-center my-4">
                                                    <i class="fa fa-phone-alt mx-2" style="font-size:20px;"></i>
                                                    <div href="#"><?php echo ' '.$contact_info['tel']?></div>
                                                </div>
                                                <div class="d-flex align-items-center my-4">
                                                    <i class="fas fa-fax mx-2" style="font-size:20px;"></i>
                                                    <div href="#"><?php echo ' '.$contact_info['fax']?></div>
                                                </div>
                                                <div class="d-flex align-items-center my-4">
                                                    <i class="fas fa-envelope mx-2" style="font-size:20px;"></i>
                                                    <div href="#"><?php echo ' '.$contact_info['email']?></div>
                                                </div>
                                            </div>
                                            <?php endif ?>
                                        </div>
                                        <?php if($area_toggle['clinic_map'] == 1): ?>
                                        <div class="col-sm-12 col-md-12 <?php echo ($area_toggle['clinic_desc'] || $area_toggle['clinic_contact']) ? 'col-lg-6' : 'col-lg-12' ?>">
                                            <iframe
                                                    id="preview"
                                                    width="100%"
                                                    height="480px"
                                                    style="border:0"
                                                    loading="lazy"
                                                    allowfullscreen
                                                    src="https://www.google.com/maps/embed/v1/place?key=<?php echo $this->config->item('google_api_key')?>&q=<?php echo $contact_info['address']; ?> <?php echo $contact_info['city']; ?> <?php echo $contact_info['state']; ?> <?php echo $contact_info['zip']; ?>">
                                            </iframe>
                                        </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20"></div>
                                </div>
                            </section><!--/about-us-->
                            <section style="background-color: #091D3E;">
                                <div class="container">
                                    <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20"></div>
                                    <?php if($area_toggle['clinic_workinghour'] == 1): ?>
                                    <div class="title-heading pdbt-30" style="color:white!important;">
                                        <?php echo $component_text['t_working_hour'] ?>
                                    </div>
                                    <?php for($i=0;$i < count($working_hours);$i++): ?>
                                        <div class="my-4" style="color:white!important;"><i class="check-icon"></i> <?php echo $working_hours[$i]['name']; ?> : <?php echo $working_hours[$i]['time']; ?></div>
                                    <?php endfor ?>
                                    <?php endif ?>
                                    <?php if($area_toggle['clinic_afterhours'] == 1): ?>
                                        <div style="color:white!important;" class="mt-5">
                                            <?php echo $component_text['t_after_hours']; ?>
                                        </div>
                                    <?php endif ?>
                                    <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20"></div>
                                </div>
                            </section>
                            <section>
                                <div class="container">
                                    <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20"></div>
                                    <div class="row">
                                        <?php if($area_toggle['clinic_additional_1'] == 1): ?>
                                            <div class="col-md-12 col-xl-12 my-2">
                                                <div class="bg-white p-5" style="box-shadow: 0 1px 22px rgb(157 184 209 / 19%)">
                                                    <div class="text-color-title-sidebar" style="font-size:20px; font-family: 'Jost', sans-serif; font-weight:bold">
                                                        <?php echo $component_text['t_clinic_additional_1_title']?>
                                                    </div>
                                                    <div class="pdt-10 text-color-title-sidebar">
                                                        <?php echo $component_text['t_clinic_additional_1_desc']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                        <?php if($area_toggle['clinic_additional_2'] == 1): ?>
                                            <div class="col-md-12 col-xl-12 my-2">
                                                <div class="bg-white p-5" style="box-shadow: 0 1px 22px rgb(157 184 209 / 19%)">
                                                    <div class="text-color-title-sidebar" style="font-size:20px; font-family: 'Jost', sans-serif; font-weight:bold">
                                                        <?php echo $component_text['t_clinic_additional_2_title']?>
                                                    </div>
                                                    <div class="pdt-10 text-color-title-sidebar">
                                                        <?php echo $component_text['t_clinic_additional_2_desc']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                        <?php if($area_toggle['clinic_additional_3'] == 1): ?>
                                            <div class="col-md-12 col-xl-12 my-2">
                                                <div class="bg-white p-5" style="box-shadow: 0 1px 22px rgb(157 184 209 / 19%)">
                                                    <div class="text-color-title-sidebar" style="font-size:20px; font-family: 'Jost', sans-serif; font-weight:bold">
                                                        <?php echo $component_text['t_clinic_additional_3_title']?>
                                                    </div>
                                                    <div class="pdt-10 text-color-title-sidebar">
                                                        <?php echo $component_text['t_clinic_additional_3_desc']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                        <?php if($area_toggle['clinic_additional_4'] == 1): ?>
                                            <div class="col-md-12 col-xl-12 my-2">
                                                <div class="bg-white p-5" style="box-shadow: 0 1px 22px rgb(157 184 209 / 19%)">
                                                    <div class="text-color-title-sidebar" style="font-size:20px; font-family: 'Jost', sans-serif; font-weight:bold">
                                                        <?php echo $component_text['t_clinic_additional_4_title']?>
                                                    </div>
                                                    <div class="pdt-10 text-color-title-sidebar">
                                                        <?php echo $component_text['t_clinic_additional_4_desc']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                        <?php if($area_toggle['clinic_additional_5'] == 1): ?>
                                            <div class="col-md-12 col-xl-12 my-2">
                                                <div class="bg-white p-5" style="box-shadow: 0 1px 22px rgb(157 184 209 / 19%)">
                                                    <div class="text-color-title-sidebar" style="font-size:20px; font-family: 'Jost', sans-serif; font-weight:bold">
                                                        <?php echo $component_text['t_clinic_additional_5_title']?>
                                                    </div>
                                                    <div class="pdt-10 text-color-title-sidebar">
                                                        <?php echo $component_text['t_clinic_additional_5_desc']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20"></div>
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

</html>