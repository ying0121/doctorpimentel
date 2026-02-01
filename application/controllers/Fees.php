<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

class Fees extends CI_Controller
{
    public $directory = './assets/two-captcha';

    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');

        $this->load->model('Frontend_model');
        $this->load->model('Systeminfo_model');
        $this->load->model('Alert_model');
        $this->load->model('Language_model');
        $this->load->model('Patient_model');
        $this->load->model('ContactInfo_model');
        $this->load->model('Fee_model');
        $this->load->model('Content_model');
    }

    public function index()
    {
        if ($this->session->userdata('language'))
            $siteLang = $this->session->userdata('language');
        else
            $siteLang = 'es';

        // get random two-captcha image for footer
        $files = array_diff(scandir($this->directory), array('..', '.'));
        if (empty($files)) {
            $data['footer_captcha_image'] = '';
        } else {
            $randomFile = $files[array_rand($files)];
            $captcha_image = $this->directory . '/' . $randomFile;
            $this->session->set_userdata('ying-footer', md5($randomFile));
            $data['footer_captcha_image'] = $captcha_image;
        }

        $data['component_text'] = $this->Frontend_model->getComponentTexts($siteLang);
        $data['contact_info'] = $this->Frontend_model->getContactInfo();
        $data['area_toggle'] = $this->Frontend_model->getAreaToggle();
        $data['working_hours'] = $this->Frontend_model->getWorkingHours($siteLang);

        $data['sysinfo'] = $this->Systeminfo_model->readSysInfo();
        $data['alerts'] = $this->Alert_model->getAvailableAlert();
        $data['languages'] = $this->Language_model->read();
        $data['acronym'] = $this->ContactInfo_model->readAcronym()['acronym'];
        $data['meta'] = $this->Frontend_model->getMeta();

        if ($this->session->userdata('patient_id')) {
            $patient = $this->Patient_model->choose($this->session->userdata('patient_id'));
            $data['patient_info'] = $patient;
        } else {
            $data['patient_info'] = array(
                'id' => 0,
                'patient_id' => 0,
                'fname' => '',
                'lname' => '',
                'mname' => '',
                'gender' => 'M',
                'dob' => '',
                'email' => '',
                'phone' => '',
                'mobile' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'language' => 17,
                'ethnicity' => '',
                'race' => ''
            );
        }

        // Fee page meta (header, desc, footer, note)
        $feeMetaRaw = $this->Fee_model->getMeta();
        $langKey = $siteLang == 'en' ? 'en' : 'es';
        $data['fee_meta'] = array(
            'header' => isset($feeMetaRaw['t_fee_header'][$langKey]) ? $feeMetaRaw['t_fee_header'][$langKey] : '',
            'desc' => isset($feeMetaRaw['t_fee_desc'][$langKey]) ? $feeMetaRaw['t_fee_desc'][$langKey] : '',
            'footer' => isset($feeMetaRaw['t_fee_footer'][$langKey]) ? $feeMetaRaw['t_fee_footer'][$langKey] : '',
            'note' => isset($feeMetaRaw['t_fee_note'][$langKey]) ? $feeMetaRaw['t_fee_note'][$langKey] : ''
        );

        $data['fees'] = $this->Fee_model->getPublicClinicFees($siteLang);
        $data['HEADER_BANNER'] = $this->Frontend_model->getPageImages('Fees', 'HEADER-BANNER', $siteLang);
        if (empty($data['HEADER_BANNER'])) {
            $data['HEADER_BANNER'] = $this->Frontend_model->getPageImages('Home', 'HEADER-BANNER', $siteLang);
        }

        $this->session->set_userdata("page_status", "fees");

        $this->load->view('fees', $data);
    }
}
