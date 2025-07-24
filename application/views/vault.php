<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes.php'); ?>
    <style>
        .vault-container {
            padding-right: 5%;
            padding-left: 5%;
        }

        #history_modal .modal-body {
            max-height: 500px;
            overflow-y: auto;
            scrollbar-width: thin;
        }

        .fs-2 {
            font-size: 1.5rem !important;
        }

        .fs-3 {
            font-size: 1.25rem !important;
        }

        .fs-4 {
            font-size: 1.0rem !important;
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

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix mb-10">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

                                <section class="box-service-details">
                                    <div class="vault-container">
                                        <div class="row">
                                            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="20" data-smobile="20" style="height:120px"></div>
                                        </div>

                                        <div class="d-flex justify-start p-3" style="margin-bottom: 20px;">
                                            <div style="padding-right: 25px !important;">
                                                <p class="title-post-heading"><?php echo $component_text['t_vault_title'] ?></p>
                                            </div>
                                            <div style="padding-right: 45px !important;">
                                                <p class="title-post-heading" style="color: orange;"><?php echo $patient_info['fname'] . ' ' . $patient_info['lname'] ?></p>
                                            </div>
                                            <div class="title-post-subheading" style="padding-right: 60px !important;">
                                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php $dob = new DateTime($patient_info['dob']);
                                                                                            echo $dob->format('m/d/Y') ?>
                                            </div>
                                            <div class="title-post-subheading" style="padding-right: 30px !important;">
                                                <?php echo $component_text['v_acc_no'] ?> : <?php echo $patient_info['id'] ?>
                                            </div>
                                            <a href="#" class="text-primary fs-3" id="view_appt_info"><?php echo $component_text['btn_appt_info'] ?></a>
                                        </div>
                                        <div class="d-flex justify-start">
                                            <div class="title-post-subheading" style="padding-right: 35px !important;">
                                                <i class="fa fa-location-arrow"></i>&nbsp;&nbsp;<?php if ($patient_info['address']) echo $patient_info['address'] . ', ' . $patient_info['state'] . ' ' . $patient_info['zip']; ?>
                                            </div>
                                            <div class="title-post-subheading" style="padding-right: 10px !important;">
                                                <i class="fa fa-phone"></i>&nbsp;&nbsp;<?php if ($patient_info['phone']) echo $patient_info['phone'];
                                                                                        else echo ""; ?>
                                            </div>
                                            <div class="title-post-subheading" style="padding-right: 10px !important;">|</div>
                                            <div class="title-post-subheading" style="padding-right: 60px !important;">
                                                <i class="fa fa-fax"></i>&nbsp;&nbsp;<?php if ($patient_info['mobile']) echo $patient_info['mobile'];
                                                                                        else echo ""; ?>
                                            </div>
                                            <div class="title-post-subheading" style="padding-right: 30px !important;">
                                                <i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php if ($patient_info['email']) echo $patient_info['email'];
                                                                                            else echo ""; ?>
                                            </div>
                                        </div>
                                        <div class="title-post-body normal-text pl-2 my-3">
                                            <?php echo $component_text['t_pa_v_htext'] ?>
                                        </div>

                                        <ul class="nav nav-tabs nav-pills" data-tabs="tabs">
                                            <li class="nav-item active">
                                                <a class="nav-pills nav-link btn-lg btn-link" href="#inbox" data-toggle="tab">
                                                    <i class="fa fa-envelope"></i> <?php echo $component_text['v_inbox'] ?>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-pills nav-link btn-lg btn-link" href="#contact" data-toggle="tab">
                                                    <i class="fa fa-file-signature"></i> <?php echo $component_text['v_compose'] ?>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-pills nav-link btn-lg btn-link" href="#document" data-toggle="tab">
                                                    <i class="fa fa-file"></i> <?php echo $component_text['v_document'] ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="inbox" style="padding: 15px;">
                                                <div class="col-12" style="margin-top: 15px;">
                                                    <table class="table" id="inbox_table">
                                                        <thead>
                                                            <th style="min-width: 8%;">Action</th>
                                                            <th style="max-width: 6%;">Case</th>
                                                            <th style="min-width: 16%;">Updated Time</th>
                                                            <th style="min-width: 14%;">Reason</th>
                                                            <th style="max-width: 8%;">Subject</th>
                                                            <th style="min-width: 14%;">Assigned</th>
                                                            <th style="max-width: 7%;">Priority</th>
                                                            <th style="max-width: 7%;">Status</th>
                                                            <th style="min-width: 20%;">Turn Around</th>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="contact" style="padding: 25px; padding-top: 40px;">
                                                <form class="content-form" id="contact_form" action="#" method="post" accept-charset="utf-8" novalidate="novalidate" style="visibility: visible; animation-name: fadeInUp;">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-4">
                                                            <span style="font-size:x-large;"><?php echo $component_text['t_contact_desc'] ?></span>
                                                        </div>
                                                        <div class="<?php if ($this->session->userdata('language') == 'en') echo 'col-md-3';
                                                                    else echo 'col-md-4' ?>">
                                                            <div style="text-align: left;">
                                                                <div style="font-size:18px; margin:10px;"><?php echo $component_text['t_contact_reason'] ?> (*) :</div>
                                                                <input type="radio" value="Appointment Request" name="contactreason" id="t_contact_reason_1">
                                                                <label for="t_contact_reason_1"><?php echo $component_text['t_contact_reason_1'] ?></label><br>
                                                                <input type="radio" value="Letter Request" name="contactreason" id="t_contact_reason_2">
                                                                <label for="t_contact_reason_2"><?php echo $component_text['t_contact_reason_2'] ?></label><br>
                                                                <input type="radio" value="Prescription Refill Request" name="contactreason" id="t_contact_reason_3">
                                                                <label for="t_contact_reason_3"><?php echo $component_text['t_contact_reason_3'] ?></label><br>
                                                                <input type="radio" value="Referral Request" name="contactreason" id="t_contact_reason_4">
                                                                <label for="t_contact_reason_4"><?php echo $component_text['t_contact_reason_4'] ?></label><br>
                                                                <input type="radio" value="Test Results Request" name="contactreason" id="t_contact_reason_5">
                                                                <label for="t_contact_reason_5"><?php echo $component_text['t_contact_reason_5'] ?></label><br>
                                                                <input type="radio" value="General Message" name="contactreason" checked id="t_contact_reason_6">
                                                                <label for="t_contact_reason_6"><?php echo $component_text['t_contact_reason_6'] ?></label><br>
                                                            </div>
                                                        </div>
                                                        <div class="<?php if ($this->session->userdata('language') == 'en') echo 'col-md-9';
                                                                    else echo 'col-md-8' ?>">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <input class="input-contact" id="contact_subject" name="contact_subject" type="text" placeholder="<?php echo $component_text['placeholder_subject']; ?>">
                                                                </div>
                                                                <div class="col-12">
                                                                    <textarea class="input-contact" id="contact_message" name="contact_message" placeholder="<?php echo $component_text['placeholder_message']; ?>" style="height:200px;"></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input class="input-contact" id="contact_time" name="contact_time" type="text" placeholder="<?php echo $component_text['placeholder_besttime']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <button id="btn_submit_contact" type="button" class="themesflat-button bg-accent btn-submit"><span><?php echo $component_text['btn_send']; ?></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="document" style="padding: 15px;">
                                                <p class="p-3"><?php echo $component_text['t_pa_v_desc'] ?></p>
                                                <?php for ($i = 0; $i < count($vault); $i++): ?>
                                                    <div class="bg-white p-0 rounded" style="border:1px solid #152847; box-shadow: 0 1px 22px rgb(157 184 209 / 50%)">
                                                        <div class="d-flex justify-content-center px-2 py-2 flex-lg-row flex-column align-items-center rounded-top" style="color:white; background-color:#152847;">
                                                            <div style="text-align:center; font-size:20px; font-family: 'Jost', sans-serif; font-weight:bold">
                                                                <i class="fa-lg fas fa-file-alt mr-2"></i><?php echo $vault[$i]['title'] ?> (<?php echo $vault[$i]['submit_date'] ?>)
                                                            </div>
                                                            <a class="themesflat-button small pr-1 d-flex align-items-center" href="<?php echo base_url() . 'local/ServeAsset/getFile?category=vault&filename=' . $vault[$i]['document'] ?>" target="_blank">
                                                                <i class="fas fa-arrow-circle-down fa-lg mr-1"></i>
                                                                <?php echo $component_text['t_download']; ?>
                                                            </a>
                                                        </div>
                                                        <div class="p-4 text-color-title-sidebar text-center" style="background-color:white;">
                                                            <?php echo $vault[$i]['desc'] ?>
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

    <div class="modal modal-fade" tabindex="-1" role="dialog" aria-hidden="true" id="history_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" id="reply-contact_id" />
                <input type="hidden" id="reply-assigned" />
                <input type="hidden" id="reply-case_number" />
                <input type="hidden" id="reply-patient_id" />
                <div class="modal-header">
                    <div class="">
                        <h4 id="modal_history_title" class="modal-title mb-2" style="font-weight:500;"><?php echo $component_text['c_item_contact_history'] ?></h4>
                        <h6 id="modal_history_title_patient" style="font-size: 16px;"></h6>
                        <h6 id="modal_history_title_status" style="font-size:15px;"></h6>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="contact_history_panel" class="w-100"></div>
                </div>
                <div class="modal-footer">
                    <textarea class="form-control w-100 mb-3" id="message-modal-input" name="message-modal-input" rows="3" placeholder="<?php echo $component_text['c_item_msg_placeholder'] ?>"></textarea>
                    <button type="button" class="btn btn-primary" id="message_modal_reply"><?php echo $component_text['c_item_send_msg'] ?></button>
                    <button type="button" class="btn btn-danger" id="history_modal_close"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-fade" tabindex="-1" role="dialog" aria-hidden="true" id="view_appt_info_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-2" style="font-weight:500;"><?php echo $component_text['btn_appt_info'] ?></h4>
                </div>
                <div class="modal-body">
                    <div id="contact_history_panel" class="w-100"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="appt_info_modal_close"><?php echo $component_text['c_item_close'] ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getTimeDiff(start, end) {
            var diff = parseInt(Math.abs(new Date(end) - new Date(start)) / 1000)
            var _str = ''
            if (parseInt(diff / (86400 * 30))) {
                _str = `more than ${parseInt(diff / (86400 * 30))} Month(s)`
            } else if (parseInt(diff / 86400)) {
                _str = `${parseInt(diff / 86400)} Day(s) ${parseInt((diff % 86400) / 3600)} Hour(s)`
            } else if (parseInt(diff / 3600)) {
                _str = `${parseInt(diff / 3600)} Hour(s) ${parseInt((diff % 3600) / 60)} Minute(s)`
            } else if (parseInt(diff / 60)) {
                _str = `${parseInt(diff / 60)} Minute(s) ${parseInt(diff % 60)} Second(s)`
            } else {
                _str = `${diff} Second(s)`
            }
            return _str
        }

        $(document).ready(function() {
            let inbox_table = $('#inbox_table').DataTable({
                'pagingType': 'full_numbers',
                'order': [
                    [2, 'desc']
                ],
                'lengthMenu': [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'All']
                ],
                responsive: true,
                language: {
                    serach: '_INPUT_',
                    searchPlaceholder: 'Search Records'
                },
                'ajax': {
                    'url': '<?php echo base_url() ?>Vault/getContacts',
                    'type': 'POST',
                    'data': function(data) {
                        data.patient_id = '<?php echo $patient_info['id'] ?>'
                        data.pt_emr_id = '<?php echo $patient_info['patient_id'] ?>'
                    }
                },
                'columns': [{
                        data: 'case_number',
                        render: function(data, type, row) {
                            return `<div idkey="${row.id}" assigned="${row.assign}" assigned_name="${row.assigned_name}" case_number="${row.case_number}" patient_id="${row.pt_emr_id}" status="${row.status}">
                                    <span class='btn btn-icon mx-1 btn-sm btn-outline-primary historybtn'><i class='fa fa-comment'></i></span>
                                </div>`
                        }
                    },
                    {
                        data: 'case_number',
                        render: function(data, type, row) {
                            return row.case_number + '<?php echo $acronym ?>'
                        }
                    },
                    {
                        data: 'date',
                        render: function(data, type, row) {
                            var date = new Date(row.date)
                            return date.toLocaleDateString('en-US', {
                                month: '2-digit',
                                day: '2-digit',
                                year: 'numeric',
                                hour: "2-digit",
                                minute: "2-digit",
                                hour12: true
                            })
                        }
                    },
                    {
                        data: 'reason'
                    },
                    {
                        data: 'subject'
                    },
                    {
                        data: 'assign',
                        render: function(data, type, row) {
                            return row.assign > 0 ? row.assigned_name : 'NoBody'
                        }
                    },
                    {
                        data: 'priority',
                        render: function(data, type, row) {
                            return `<span class = '${row.priority==1?"text-danger":(row.priority==2?"text-warning":"text-success")}'>${row.priority==1?"Routine":(row.priority==2?"Medium":"Low")}</span>`
                        }
                    },
                    {
                        data: 'status',
                        render: function(data, type, row) {
                            return `<span class = '${row.status==1?"text-danger":(row.status==2?"text-success":"text-primary")}'>${row.status==1?"Open":(row.status==2?"In progress":"Closed")}</span>`
                        }
                    },
                    {
                        data: 'date',
                        render: function(data, type, row) {
                            return row.status == 3 ? getTimeDiff(row.sent, row.closed_date) : `<div class="px-5"><hr></div>`
                        }
                    },
                ],
                createdRow: function(row, data, dataIndex) {
                    if (data.pt_unread_count > 0) {
                        $(row).addClass('bg-light-primary')
                    }
                }
            })

            $('select[name="inbox_table_length"]').removeClass('custom-select')
            $('select[name="inbox_table_length"]').addClass('mb-0')
            $('select[name="inbox_table_length"]').css({
                'height': 'calc(2.25rem + 2px)'
            })
            $('input[type="search"]').css({
                'margin-bottom': '0px',
                'height': 'calc(2.25rem + 2px)'
            })

            $('#inbox_compose').click(() => {
                $('#vault_contact_modal').modal('show')
            })

            $('#btn_submit_contact').click(() => {
                var errors = ""
                var app_subject = document.getElementById("contact_subject")
                var app_message = document.getElementById("contact_message")
                if (app_subject.value == "") {
                    errors += '<?php echo $component_text['m_invalid_subject'] ?>'
                } else if (app_message.value == "") {
                    errors += '<?php echo $component_text['m_invalid_message'] ?>'
                }
                if (errors) {
                    Swal.fire({
                        title: '<?php echo $component_text['t_invalid_info'] ?>',
                        text: errors,
                        icon: 'warning',
                        confirmButtonText: 'Cool'
                    })
                    return false
                } else {
                    $("#contactsubmitbtn").prop("disabled", true)

                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url() ?>' + 'Vault/submitContact',
                        data: {
                            patient_id: '<?php echo $patient_info['id'] ?>',
                            patient_name: "<?php echo $patient_info['fname'] ?>" + ' ' + "<?php echo $patient_info['lname'] ?>",
                            patient_dob: '<?php echo $patient_info['dob'] ?>',
                            patient_phone: '<?php echo $patient_info['phone'] ?>',
                            patient_email: '<?php echo $patient_info['email'] ?>',
                            reason: $('input[name="contactreason"]:checked').val(),
                            subject: $('#contact_subject').val(),
                            message: $('#contact_message').val(),
                            best_time: $('#contact_time').val()
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.status == 'success') {
                                Swal.fire({
                                    title: '<?php echo $component_text['c_case'] ?>' + ' # : ' + data.id + '<?php echo $acronym ?>',
                                    text: '<?php echo $component_text['t_pa_v_alert_success'] ?>',
                                    icon: 'success',
                                })
                                inbox_table.ajax.reload()
                            } else if (data.status == 'failed') {
                                Swal.fire({
                                    title: '<?php echo $component_text['c_error'] ?>',
                                    text: '<?php echo $component_text['t_pa_v_alert_failed'] ?>',
                                    icon: 'error',
                                })
                            } else {
                                Swal.fire({
                                    title: '<?php echo $component_text['c_error'] ?>',
                                    text: data.status,
                                    icon: 'error',
                                })
                            }
                            $("#contact_form")[0].reset()
                        }
                    })
                }
            })

            $(document).on('click', '.historybtn', function() {
                $('#message-modal-input').val('')

                $('#reply-contact_id').val($(this).parent().attr("idkey"))
                $('#reply-assigned').val($(this).parent().attr("assigned"))
                $('#reply-case_number').val($(this).parent().attr("case_number"))
                $('#reply-patient_id').val($(this).parent().attr('patient_id'))

                var id = $(this).parent().attr("idkey")
                var case_number = $(this).parent().attr("case_number")
                var assign = $(this).parent().attr("assigned")
                var patient_id = $(this).parent().attr("patient_id")
                $.ajax({
                    url: '<?php echo base_url() ?>' + 'Vault/viewCommunicationHistory',
                    method: "POST",
                    data: {
                        id: id,
                        case_number: case_number,
                        assign: assign,
                        patient_id: patient_id,
                        person_type: 'staff' // read message of staff
                    },
                    dataType: "json",
                    success: function(res) {
                        let contact = res.contact

                        var html = ''

                        // Calculate the difference in years
                        var date2 = new Date(contact['dob'])
                        var date1 = new Date(Date.now())
                        let differenceInYears = date1.getFullYear() - date2.getFullYear();

                        // Adjust for months and days
                        const monthDifference = date2.getMonth() - date1.getMonth();
                        const dayDifference = date2.getDate() - date1.getDate();

                        if (monthDifference < 0 || (monthDifference === 0 && dayDifference < 0)) {
                            differenceInYears--;
                        }

                        $('#modal_history_title').text(`<?php echo $component_text['c_item_contact_history'] ?> | <?php echo $component_text['c_item_case_num'] ?> : ${contact['case_number']}<?php echo $acronym; ?>`)
                        $('#modal_history_title_patient').text(`${contact['name']} | ${new Date(contact['dob']).toLocaleDateString()} | ${contact['patient_sex'] == 'Male' ? '<?php echo $component_text['c_item_male'] ?>' : '<?php echo $component_text['c_item_female'] ?>'} | <?php echo $component_text['c_item_age'] ?> : ${differenceInYears} | Lang : ${contact['patient_lang']}`)
                        $('#modal_history_title_status').html(`<div class="d-flex">
                                                                <div style="margin-right: 30px;"><?php echo $component_text['c_item_time_around'] ?> : ${contact['status'] == 3 ? getTimeDiff(contact['sent'], contact['closed_date']) : '--/--/----'}</div>
                                                                <span class = "${contact['status']==1?'text-danger':(contact['status']==2?'text-success':'text-primary')}">${contact['status']==1?"Open":(contact['status']==2?"In progress":"Closed")}</span>
                                                           </div>`)
                        var history = res.history
                        history.forEach(item => {
                            html += `<div class='w-100 mb-3'>
                                    <div class='d-flex ${item['person_type'] == 'patient' ? 'justify-content-end' : 'justify-content-start'}'>
                                        <p class='text-black-50' style='font-size: 12px;'>${item['person_type'] == 'patient' ? 'You' : contact['staff_name']}&nbsp;&nbsp;${new Date(item['created_time']).toLocaleString()}</p>
                                    </div>
                                    <div class='d-flex ${item['person_type'] == 'patient' ? 'justify-content-end' : 'justify-content-start'}' style='margin-top: -5px;'>
                                        <div class='${item['person_type'] == 'patient' ? 'bg-secondary' : 'bg-light-primary'} rounded'>
                                            <div class='p-2' style='word-break: break-word; font-size: 15px;'>${item['message']}</div>
                                        </div>
                                        <i class="mx-2 d-flex justify-content-center align-items-center ${item['seen'] == 0 ? 'fa fa-check' : 'fa fa-check-double'} text-success"></i>
                                    </div>
                                </div>`
                        })

                        if (!history.length) {
                            html = `<div style="font-size: 32px; width: 100%; height: 120px; display: flex; justify-content: center; align-items: center;">
                                    <div style="text-align: center;">
                                        <i class="fa fa-folder-open"></i> <?php echo $component_text['c_item_no_history'] ?>
                                    </div>
                                </div>`
                        }

                        $('#contact_history_panel').html(html)
                        $('#history_modal').css({
                            'display': 'block'
                        })
                    }
                })
            })

            $(document).on('click', '#history_modal_close', function() {
                $('#history_modal').css({
                    'display': 'none'
                })
            })

            $(document).on('click', '#appt_info_modal_close', function() {
                $('#view_appt_info_modal').css({
                    'display': 'none'
                })
            })

            $('#message_modal_reply').click(function() {
                let message = $('#message-modal-input').val()
                let assign = $('#reply-assigned').val()
                let case_number = $('#reply-case_number').val()
                let patient_id = $('#reply-patient_id').val()

                if (!message) {
                    Swal.fire({
                        text: 'Please input your message',
                        icon: 'warning',
                        confirmButtonText: 'Close'
                    })
                } else {
                    var encrypt = new JSEncrypt()
                    encrypt.setPublicKey(`<?php echo $this->config->item('public_key') ?>`)
                    $.post({
                        url: '<?php echo base_url() ?>' + 'Vault/addMessage',
                        method: "POST",
                        data: {
                            contact_id: $('#reply-contact_id').val(),
                            message: encrypt.encrypt(message),
                            patient_id: encrypt.encrypt(patient_id),
                            assign: encrypt.encrypt(assign),
                            case_number: encrypt.encrypt(case_number),
                            person_type: encrypt.encrypt('patient')
                        },
                        dataType: "json",
                        success: function(res) {
                            if (res.status == "success") {
                                inbox_table.ajax.reload()
                                Swal.fire({
                                    text: 'Message has been sent successfully!',
                                    icon: 'success',
                                    confirmButtonText: 'Close'
                                })
                            } else {
                                Swal.fire({
                                    text: 'Failed in sending',
                                    icon: 'error',
                                    confirmButtonText: 'Close'
                                })
                            }

                            $('#history_modal').css({
                                'display': 'none'
                            })
                        }
                    })
                }
            })

            window.addEventListener('resize', () => {
                $('#inbox_table').css({
                    'width': '100%',
                    'table-layout': 'auto'
                })
            })

            $(document).on("click", "button[data-dismiss='modal']", function() {
                if ($(this).parent().parent().parent().parent().prop('id')) {
                    $(this).parent().parent().parent().parent().css({
                        'display': 'none'
                    })
                } else if ($(this).parent().parent().parent().parent().parent().parent().prop('id')) {
                    $(this).parent().parent().parent().parent().parent().parent().css({
                        'display': 'none'
                    })
                }
            })

            $("#view_appt_info").click(function() {
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>' + 'Vault/getApptInfo',
                    data: {
                        patient_id: '<?php echo $patient_info['patient_id'] ?>'
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log(res)
                    }
                })
                $("#view_appt_info_modal").css({
                    'display': 'block'
                })
            })
        })
    </script>
</body>

</html>