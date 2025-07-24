<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="<?php echo base_url() ?>manifest.json">

    <title><?php echo $meta['meta_title'] ?> </title>
    <meta name="description" content="<?php echo $meta['meta_desc'] ?>">
    <meta name="theme-color" content="#317EFB">

    <!-- Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta['facebook_title'] ?>">
    <meta property="og:description" content="<?php echo $meta['facebook_desc'] ?>">
    <meta property="og:image" content="<?php echo base_url() ?>assets/images/facebook_meta.jpg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="conecxo.com">
    <meta name="twitter:title" content="<?php echo $meta['twitter_title'] ?>">
    <meta name="twitter:description" content="<?php echo $meta['twitter_desc'] ?>">
    <meta name="twitter:image" content="<?php echo base_url() ?>assets/images/twitter_meta.jpg">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" sizes="32x32" />

    <style>
        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -12.5px;
            margin-left: -12.5px;
        }

        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="row" style="padding-top: 4rem; padding-bottom: 4rem;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
            $desc = $info['desc'];
            if ($desc) {
                $desc = str_replace('$clinic_name', $contact_info['name'], $desc);
                $desc = str_replace('$contact_phone', $contact_info['tel'], $desc);
                $desc = str_replace('$contact_email', $contact_info['email'], $desc);
                $desc = str_replace('$contact_address', $contact_info['address'], $desc);
                $desc = str_replace('$last_updated_date', "03/30/2025", $desc);
                echo $desc;
            } else {
                echo "";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>

<script>
</script>

</html>