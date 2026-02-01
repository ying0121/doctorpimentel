<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        .fee-container {
            margin: 0.5rem;
            padding: 2rem 1rem;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .fee-title {
            font-size: 2.7rem;
            color: var(--primary-color2);
            font-weight: 600;
        }

        .fee-desc {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 2rem;
        }

        .fee-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(51, 185, 203, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .fee-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(51, 185, 203, 0.2);
            border-color: var(--primary-color);
        }

        .fee-card-header {
            padding: 1.5rem 1.5rem 0;
            flex-grow: 1;
        }

        .fee-card-title {
            color: var(--primary-color);
            font-size: 1.35rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .fee-card-price {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, var(--primary-color) 0%, #00aebd 100%);
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            border-radius: 8px;
            margin-top: 0.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .fee-card:hover .fee-card-price {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(51, 185, 203, 0.4);
        }

        .fee-card-desc {
            font-size: 15px;
            line-height: 1.6;
            color: #666;
            margin-top: 1rem;
        }

        .fee-card-desc p {
            margin-bottom: 0.5rem;
        }

        .fee-card-footer {
            padding: 1rem 1.5rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.06);
        }

        .fee-card-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .fee-card:hover .fee-card-image {
            transform: scale(1.05);
        }

        .fee-card-image-wrap {
            overflow: hidden;
        }

        .fee-footer-text {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            margin-top: 2rem;
            padding: 1.5rem;
            background: rgba(51, 185, 203, 0.06);
            border-radius: 8px;
            border-left: 4px solid var(--primary-color);
        }

        .fee-note-text {
            font-size: 14px;
            color: #777;
            font-style: italic;
            margin-top: 1rem;
        }

        .bg-gray {
            background-color: #f5f7fa;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fee-animate-in {
            animation: fadeInUp 0.6s ease-out forwards;
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
            <?php 
            $has_banner = isset($HEADER_BANNER) && !empty($HEADER_BANNER);
            $img_id = $has_banner ? rand(0, count($HEADER_BANNER) - 1) : 0;
            $banner_img = $has_banner ? $HEADER_BANNER[$img_id]['img'] : 'default.jpg';
            ?>
            <div id="header-baner" style="background-image: url('<?php echo base_url() ?>assets/images/pageimgs/<?php echo htmlspecialchars($banner_img); ?>')">
                <div class="container d-flex align-items-center" style="height:100%;"></div>
            </div>

            <div id="main-content" class="site-main clearfix mb-10">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <section class="box-service-details">
                                    <div class="fee-container">
                                        <p class="fee-title wow fadeInDown mb-4 px-4 px-md-5" data-wow-duration="0.6s">
                                            <?php echo !empty($fee_meta['header']) ? $fee_meta['header'] : $component_text['menu_fees']; ?>
                                        </p>
                                        <?php if (!empty($fee_meta['desc'])): ?>
                                        <div class="fee-desc wow fadeInUp px-4 px-md-5" data-wow-duration="0.6s" data-wow-delay="0.1s">
                                            <?php echo $fee_meta['desc']; ?>
                                        </div>
                                        <?php endif ?>

                                        <div class="w-100 row justify-content-center px-2 px-md-4" id="fee-list-container">
                                            <?php 
                                            $stagger = 0;
                                            foreach ($fees as $fee): 
                                                $price = isset($fee['fee']) && $fee['fee'] > 0 ? $fee['fee'] : (isset($fee['cost']) && $fee['cost'] > 0 ? $fee['cost'] : 0);
                                                $priceDisplay = $price > 0 ? '$' . number_format($price, 2) : (isset($component_text['c_health_plan_elig']) ? $component_text['c_health_plan_elig'] : 'Contact for pricing');
                                                $hasImage = !empty($fee['image']);
                                            ?>
                                            <div class="col-md-6 col-xl-4 mb-4 mb-xl-5 px-3 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="<?php echo ($stagger * 0.1); ?>s">
                                                <div class="fee-card h-100">
                                                    <?php if ($hasImage): ?>
                                                    <div class="fee-card-image-wrap">
                                                        <img src="<?php echo base_url(); ?>assets/service/image/<?php echo htmlspecialchars($fee['image']); ?>" 
                                                             alt="<?php echo htmlspecialchars($fee['title']); ?>" 
                                                             class="fee-card-image" />
                                                    </div>
                                                    <?php endif ?>
                                                    <div class="fee-card-header">
                                                        <h3 class="fee-card-title"><?php echo htmlspecialchars($fee['title']); ?></h3>
                                                        <div class="fee-card-price"><?php echo $priceDisplay; ?></div>
                                                        <?php if (!empty($fee['short_desc'])): ?>
                                                        <div class="fee-card-desc"><?php echo $fee['short_desc']; ?></div>
                                                        <?php endif ?>
                                                    </div>
                                                    <?php if (!empty($fee['key'])): ?>
                                                    <div class="fee-card-footer">
                                                        <a href="<?php echo base_url(); ?>Services/detail?s=<?php echo urlencode($fee['key']); ?>" 
                                                           class="themesflat-button bg-accent btn-submit" style="font-size: 14px; padding: 8px 16px;">
                                                            <span><?php echo isset($component_text['btn_read_more']) ? $component_text['btn_read_more'] : 'Learn More'; ?></span>
                                                        </a>
                                                    </div>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <?php 
                                            $stagger++;
                                            endforeach; 
                                            ?>

                                            <?php if (empty($fees)): ?>
                                            <div class="col-12 text-center py-5 wow fadeInUp" data-wow-duration="0.6s">
                                                <p class="fee-desc"><?php echo isset($component_text['c_no_results']) ? $component_text['c_no_results'] : 'No fees available at this time. Please contact us for more information.'; ?></p>
                                                <a href="<?php echo base_url(); ?>Contact" class="themesflat-button bg-accent btn-submit mt-3">
                                                    <span><?php echo $component_text['menu_contact']; ?></span>
                                                </a>
                                            </div>
                                            <?php endif ?>
                                        </div>

                                        <?php if (!empty($fee_meta['footer'])): ?>
                                        <div class="fee-footer-text wow fadeInUp px-4 px-md-5" data-wow-duration="0.6s" data-wow-delay="0.3s">
                                            <?php echo $fee_meta['footer']; ?>
                                        </div>
                                        <?php endif ?>

                                        <?php if (!empty($fee_meta['note'])): ?>
                                        <div class="fee-note-text wow fadeInUp px-4 px-md-5" data-wow-duration="0.6s" data-wow-delay="0.35s">
                                            <?php echo $fee_meta['note']; ?>
                                        </div>
                                        <?php endif ?>
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
