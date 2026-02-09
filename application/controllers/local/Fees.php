<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

include('utilities.php');

class Fees extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Content_model');
        $this->load->model('Fee_model');
        $this->load->model('AreaToggle_model');
    }

    function index()
    {
        $data['sideitem'] = 'fees';
        $data['component'] = $this->Content_model->getComponentTexts();
        $data['area_toggle'] = $this->AreaToggle_model->read();
        $this->load->view('local/fee/main', $data);
    }

    // clinic fee
    function getClinicFee()
    {
        $filter['category'] = $_POST['category'];
        $filter['language'] = $_POST['language'];
        $result = $this->Fee_model->getClinicFee($filter);
        echo json_encode(array('data' => $result));
    }

    function addClinicFee()
    {
        $data = array(
            'key' => $_POST['key'],
            'order' => $_POST['order'],
            'language' => $_POST['language'],
            'category' => $_POST['category'],
            'title' => $_POST['title'],
            'short_desc' => $_POST['short_desc'],
            'long_desc' => $_POST['long_desc'],
            'status' => $_POST['status'],
            'request_service' => $_POST['request_service'],
            'online_payment' => $_POST['online_payment'],
            'home_page' => $_POST['home_page'],
            'cost' => $_POST['cost'],
            'show_in_fee' => $_POST['show_in_fee'],
            'fee' => $_POST['fee']
        );
        $result = $this->Fee_model->addClinicFee($data);
        if ($result) {
            echo "ok";
        } else {
            echo "error";
        }
    }

    function updateClinicFee()
    {
        $data = array(
            'id' => $_POST['id'],
            'key' => $_POST['key'],
            'order' => $_POST['order'],
            'language' => $_POST['language'],
            'category' => $_POST['category'],
            'title' => $_POST['title'],
            'short_desc' => $_POST['short_desc'],
            'long_desc' => $_POST['long_desc'],
            'status' => $_POST['status'],
            'request_service' => $_POST['request_service'],
            'online_payment' => $_POST['online_payment'],
            'home_page' => $_POST['home_page'],
            'cost' => $_POST['cost'],
            'show_in_fee' => $_POST['show_in_fee'],
            'fee' => $_POST['fee']
        );
        $result = $this->Fee_model->updateClinicFee($data);
        if ($result) {
            echo "ok";
        } else {
            echo "error";
        }
    }

    function chosenClinicFee()
    {
        $result = $this->Fee_model->chosenClinicFee($_POST['id']);
        echo json_encode(array('data' => $result));
    }

    function deleteClinicFee()
    {
        // delete image and video
        $chosen = $this->Fee_model->chosenClinicFee($_POST['id']);
        if ($chosen["image"]) {
            unlink($_SERVER["DOCUMENT_ROOT"] . "/assets/service/image/" . $chosen["image"]);
        }
        if ($chosen["video"]) {
            unlink($_SERVER["DOCUMENT_ROOT"] . "/assets/service/video/" . $chosen["video"]);
        }

        $result = $this->Fee_model->deleteClinicFee($_POST['id']);
        if ($result) {
            echo "ok";
        } else {
            echo "error";
        }
    }

    // meta
    function getMeta()
    {
        $result = $this->Fee_model->getMeta();
        echo json_encode(array('data' => $result));
    }

    function updateMeta()
    {
        $data = array(
            'header_en' => $_POST['header_en'],
            'header_es' => $_POST['header_es'],
            'desc_en' => $_POST['desc_en'],
            'desc_es' => $_POST['desc_es'],
            'footer_en' => $_POST['footer_en'],
            'footer_es' => $_POST['footer_es'],
            'note_en' => $_POST['note_en'],
            'note_es' => $_POST['note_es']
        );
        $result = $this->Fee_model->updateMeta($data);
        if ($result) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error'));
        }
    }

    function updateDisplayFeePage()
    {
        $data = array(
            'value' => $_POST['value']
        );
        $result = $this->AreaToggle_model->update('fee_area', $data['value']);
        if ($result) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error'));
        }
    }
}
