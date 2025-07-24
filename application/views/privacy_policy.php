<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        .bg-light-gray {
            background-color: lightgray;
        }

        .bg-white {
            background-color: white;
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
            <div class="row bg-light-gray" style="padding-top: 4rem; padding-bottom: 4rem;">
                <div class="col-md-2"></div>
                <div class="col-md-8 bg-white p-5">
                    <div class="p-3">
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
                </div>
                <div class="col-md-2"></div>
            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
</body>

</html>