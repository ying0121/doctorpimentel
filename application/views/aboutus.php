<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        h1 {
            font-size: 90px;
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
            <?php $img_id = rand(0, count($HEADER_BANNER) - 1); ?>
            <div id="header-baner" style="background-image: url('<?php echo base_url() ?>assets/images/pageimgs/<?php echo $HEADER_BANNER[$img_id]['img'] ?>')">
                <div class="container d-flex align-items-center" style="height:100%;">

                    <div class="p-5 col-12 col-md-8">
                        <div style="height:30%; font-size:36px;" class="d-flex align-items-center">
                            <?php echo $HEADER_BANNER[$img_id]['title']; ?>
                        </div>
                        <div style="height:70%; font-size:18px;" class="d-flex align-items-center mt-3">
                            <?php echo $HEADER_BANNER[$img_id]['desc']; ?>
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
                                <?php if ($area_toggle['aboutus_aboutclinic'] == 1): ?>
                                    <section class="about-us">
                                        <div class="container">
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <div class="feature-medal wow fadeInUp">
                                                        <img src="assets/images/pageimgs/<?php echo $CENTRAL[rand(0, count($CENTRAL) - 1)]['img'] ?>" alt="image">
                                                        <div class="feature-medal-inner">
                                                            <img src="assets/images/common/Group7027.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 pl-lg-5">
                                                    <div class="box-wrap-ab wow fadeInUp">
                                                        <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20"></div>
                                                        <div class="title-heading pdbt-30">
                                                            <?php echo $component_text['menu_about_us'] ?>
                                                        </div>
                                                        <div class="text-color-title-sidebar">
                                                            <?php echo $component_text['t_about_clinic_desc'] ?>
                                                        </div>
                                                        <br>
                                                        <div class="text-color-title-sidebar">
                                                            <?php echo $component_text['t_about_clinic_fdesc'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
                                        </div>
                                    </section><!--/about-us-->
                                <?php endif ?>

                                <?php if ($area_toggle['aboutus_metrics'] == 1): ?>
                                    <section class="our-professional">
                                        <div class="container">
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="70" data-smobile="70"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="box-wrap-op text-center">
                                                        <div class="title-heading text-color-title-sidebar wow fadeInUp">
                                                            <?php echo $component_text['t_quality_metrics_title'] ?>
                                                        </div>
                                                        <p>
                                                            <?php echo $component_text['t_quality_metrics_desc'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="15" data-smobile="15"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="tab-nav">
                                                        <ul class="list-tab-link wow fadeInUp d-flex justify-content-center">
                                                            <?php $first = true; ?>
                                                            <?php for ($i = 0; $i < count($qualities); $i++): ?>
                                                                <?php if (!isset($qualities[$i + 1]['id']) || $qualities[$i + 1]['id'] != $qualities[$i]['id']): ?>
                                                                    <li class="tab-link <?php if ($first) {
                                                                                            echo 'active';
                                                                                            $first = false;
                                                                                        } ?>" style="height:auto;!important">
                                                                        <h4 class="tab-title" style="padding:20px 0 10px 0 !important;">
                                                                            <?php echo $qualities[$i]['catname'] ?>
                                                                        </h4>
                                                                    </li>
                                                                <?php endif ?>
                                                            <?php endfor ?>
                                                        </ul>
                                                        <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="30" data-smobile="30"></div>

                                                        <div class="tab-content wow fadeInUp">

                                                            <?php for ($i = 0; $i < count($qualities); $i++): ?>
                                                                <?php if (!isset($qualities[$i - 1]['id']) || $qualities[$i - 1]['id'] != $qualities[$i]['id']): ?>
                                                                    <div class="tab-inner">
                                                                        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="50" data-smobile="50"></div>
                                                                        <div class="row-tab-content d-flex flex-column px-5">
                                                                        <?php endif ?>
                                                                        <div>
                                                                            <div class="title-heading text-color-title-sidebar">
                                                                                <?php echo $qualities[$i]['measurename'] ?>
                                                                            </div>
                                                                            <div>
                                                                                <?php echo $qualities[$i]['mdesc'] ?>
                                                                            </div>
                                                                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="15" data-smobile="15"></div>
                                                                            <?php if ($qualities[$i]['numerator'] != ''  && $qualities[$i]['denominator'] != '' && $qualities[$i]['denominator'] != '0'): ?>
                                                                                <div class="progress-box">
                                                                                    <div class="progress-label">
                                                                                        <p class="d-none d-md-block"><?php echo $qualities[$i]['sdate'], '~', $qualities[$i]['edate']; ?></p>
                                                                                        <p class="d-none d-md-block"><?php echo 'Denominator: ', $qualities[$i]['denominator']; ?></p>
                                                                                        <p class="d-none d-md-block"><?php echo 'Numerator: ', $qualities[$i]['numerator']; ?></p>
                                                                                        <p><?php echo round($qualities[$i]['numerator'] / $qualities[$i]['denominator'] * 100) ?>%</p>
                                                                                    </div>
                                                                                    <div class="progress skill-progress margin-bottom-15">
                                                                                        <div class="progress-bar progress-bar-1 progress-animated" role="progressbar" style="width:<?php echo round($qualities[$i]['numerator'] / $qualities[$i]['denominator'] * 100) ?>%;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endif ?>
                                                                            <div>
                                                                                <?php echo $qualities[$i]['mfdesc'] ?>
                                                                            </div>
                                                                        </div>
                                                                        <?php if (!isset($qualities[$i + 1]['id']) || $qualities[$i + 1]['id'] != $qualities[$i]['id']): ?>
                                                                        </div>
                                                                        <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="50" data-smobile="50"></div>
                                                                    </div>
                                                                <?php endif ?>
                                                            <?php endfor ?>
                                                        </div><!--/tab-content-->
                                                    </div><!--/tab-nav-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="80" data-mobile="50" data-smobile="50"></div>
                                            </div>
                                        </div>
                                    </section>
                                <?php endif ?>
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