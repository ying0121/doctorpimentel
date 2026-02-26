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

        /* Service item card (same as services page) */
        .service-card-item {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
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

        .w-95 {
            width: 95% !important;
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

        .ribbon {
            position: relative;
        }

        .ribbon .ribbon-label {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px 10px;
            position: absolute;
            z-index: 1;
            background-color: var(--bs-ribbon-label-bg, #333);
            box-shadow: var(--bs-ribbon-label-box-shadow, 0 1px 3px rgba(0,0,0,0.2));
            color: var(--bs-primary-inverse, #fff);
            top: 10px;
            right: 0;
            transform: translateX(5px) translateY(-50%);
        }

        .ribbon .ribbon-label > .ribbon-inner {
            z-index: -1;
            position: absolute;
            padding: 0;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .ribbon.ribbon-end .ribbon-label {
            border-top-left-radius: .475rem;
            border-bottom-left-radius: .475rem;
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label {
            right: -5px;
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner {
            border-top-left-radius: .475rem;
            border-bottom-left-radius: .475rem;
            box-shadow: 0px 2px 3px #88888888;
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner:after,
        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner:before {
            content: "";
            position: absolute;
            border-style: solid;
            border-color: transparent !important;
            bottom: -10px;
        }

        .ribbon.ribbon-clip.ribbon-end .ribbon-label .ribbon-inner:before {
            border-width: 0 0 10px 10px;
            border-left-color: var(--bs-ribbon-clip-bg, #333) !important;
            right: 0;
        }

        .bg-success {
            background-color: #00a161 !important;
        }

        .bg-danger {
            background-color: #e42855 !important;
        }

        .text-secondary {
            color: #707070 !important;
        }

        .bg-inactive {
            background-color: lightgray !important;
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

                                        <div class="w-100 row justify-content-center" id="fee-list-container">
                                            <?php
                                            $stagger = 0;
                                            $read_more = isset($component_text['btn_read_more']) ? $component_text['btn_read_more'] : 'Learn More';
                                            $health_plan_elig = isset($component_text['c_health_plan_elig']) ? $component_text['c_health_plan_elig'] : 'Contact for pricing';
                                            foreach ($fees as $fee):
                                                $price = isset($fee['fee']) && $fee['fee'] > 0 ? $fee['fee'] : (isset($fee['cost']) && $fee['cost'] > 0 ? $fee['cost'] : 0);
                                                $priceDisplay = $price > 0 ? '$' . number_format($price, 2) : $health_plan_elig;
                                                $hasImage = !empty($fee['image']);
                                                $ribbonClass = $price > 0 ? 'bg-danger' : 'bg-success';
                                                $detailUrl = !empty($fee['key']) ? base_url() . 'Services/detail?s=' . urlencode($fee['key']) : '#';
                                                $imgSrc = $hasImage ? base_url() . 'assets/service/image/' . htmlspecialchars($fee['image']) : '';
                                            ?>
                                            <div class="col-md-6 col-xl-4 mb-5 px-5 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="<?php echo ($stagger * 0.1); ?>s">
                                                <div class="service-card-item">
                                                    <div class="bordered round-xl w-95 static-body">
                                                        <div class="ribbon ribbon-end ribbon-clip" style="min-height: 150px;">
                                                            <div class="ribbon-label text-white <?php echo $ribbonClass; ?>">
                                                                <?php echo htmlspecialchars($priceDisplay); ?>
                                                                <span class="ribbon-inner text-secondary"></span>
                                                            </div>
                                                            <?php if ($detailUrl !== '#'): ?>
                                                            <a href="<?php echo $detailUrl; ?>" target="_blank">
                                                            <?php endif; ?>
                                                            <?php if ($hasImage): ?>
                                                                <img src="<?php echo $imgSrc; ?>" alt="<?php echo htmlspecialchars($fee['title']); ?>" class="w-100 round-top-xl" style="min-height: 150px; object-fit: cover;" />
                                                            <?php else: ?>
                                                                <div class="w-100 round-top-xl bg-light d-flex align-items-center justify-content-center" style="min-height: 150px; color: #999;">
                                                                    <span><?php echo htmlspecialchars($fee['title']); ?></span>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if ($detailUrl !== '#'): ?>
                                                            </a>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="w-100 text-center d-flex justify-content-center align-items-center" style="min-height: 80px;">
                                                            <div class="mb-2" style="font-size: 21px;">
                                                                <p class="pt-2"><?php echo htmlspecialchars($fee['title']); ?></p>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <?php if (!empty($fee['key'])): ?>
                                                                    <a href="<?php echo base_url(); ?>Services/detail?s=<?php echo urlencode($fee['key']); ?>" target="_blank" class="text-primary" style="font-size: 18px;"><?php echo $read_more; ?></a>
                                                                    <?php else: ?>
                                                                    <span class="text-muted" style="font-size: 18px;"><?php echo $read_more; ?></span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
