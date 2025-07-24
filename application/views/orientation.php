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
                                <section class="box-service-details">
                                    <div class="container">
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:120px"></div>
                                        </div>
                                        <div class="title-heading title-post-heading">
                                            <?php echo $component_text['t_orientation_title'] ?>
                                        </div>
                                        <div class="normal-text pl-2 my-3">
                                            <?php echo $component_text['t_orientation_desc'] ?>
                                        </div>
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:120px"></div>
                                        </div>
                                        <?php for ($i = 0; $i < count($documents); $i++): ?>
                                            <div class="bg-white p-5" style="box-shadow: 0 1px 22px rgb(157 184 209 / 19%)">
                                                <div class="d-flex">
                                                    <div class="text-color-title-sidebar" style="font-size:20px; font-family: 'Jost', sans-serif; font-weight:bold">
                                                        <?php echo $documents[$i]['title'] ?>
                                                    </div>

                                                    <div class="ml-3 normal-text d-flex align-items-center">
                                                        <a class="pr-2 d-flex align-items-center"
                                                            href="<?php echo base_url() . 'assets/documents/' . $documents[$i]['document'] ?>"
                                                            target="_blank">
                                                            <i class="fas fa-arrow-circle-down fa-lg"></i>
                                                        </a>
                                                        <div>
                                                            <?php echo $component_text['t_download'] ?> (<?php echo $documents[$i]['size'] ?>)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pdt-10 text-color-title-sidebar">
                                                    <?php echo $documents[$i]['desc'] ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:120px"></div>
                                            </div>
                                        <?php endfor ?>

                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:120px"></div>
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

</html>