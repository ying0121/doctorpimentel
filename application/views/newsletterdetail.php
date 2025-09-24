<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        .author {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.313rem;
            color: rgb(102, 112, 133);
            margin-bottom: 0;
        }
        .desc {
            font-weight: 400;
            font-size: 16px;
            line-height: 1.313rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="counter-scroll header_sticky">
    <!--Start PreLoader--> 
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <!--End PreLoader--> 
    <div class="wrapper">
    <div id="page">
        <?php include('header.php') ?>
        <?php $img_id = rand(0, count($HEADER_BANNER) - 1); ?>

        <?php if (isset($result["img"])): ?>
            <div id="header-baner" style="background-image: url('<?php echo base_url() ?>assets/images/newsimg/<?php echo $result['img'] ?>')">
                <div class="container d-flex align-items-center" style="height:100%;"></div>
            </div>
        <?php else: ?>
            <div id="header-baner" style="background-image: url('<?php echo base_url() ?>assets/images/pageimgs/<?php echo $HEADER_BANNER[$img_id]['img'] ?>')">
                <div class="container d-flex align-items-center" style="height:100%;"></div>
            </div>
        <?php endif ?>
        <!-- Main Content -->
        <div class="container mt-5 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="paging">
                        <h4 style="font-size:xx-large;"><?php echo $result['header'] ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-three mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="desc"><?php echo $result['desc'] ?></div>
                        <div class="author"><?php echo $result['author']; ?> - <?php echo $result['published']; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center align-items-center mt-3 mb-5">
            <img src="data:image/png;base64,<?php echo $qrcode; ?>" width="320px" height="320px" />
        </div>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>
