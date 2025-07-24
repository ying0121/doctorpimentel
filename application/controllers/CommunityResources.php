<?php


defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

class CommunityResources extends CI_Controller
{
    public $directory = './assets/two-captcha';

    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');

        $this->load->model('Contacts_model');
        $this->load->model('Frontend_model');
        $this->load->model('ContactInfo_model');
        $this->load->model('Systeminfo_model');
        $this->load->model('Alert_model');
        $this->load->model('Language_model');
        $this->load->model('Patient_model');
    }

    public function index()
    {
        if ($this->session->userdata('language'))
            $siteLang = $this->session->userdata('language');
        else
            $siteLang = 'es';

        // get random two-captcha image
        $captcha_image = '';
        $files = array_diff(scandir($this->directory), array('..', '.'));
        if (empty($files)) {
            error_log('===================================');
        } else {
            $randomFile = $files[array_rand($files)];
            $captcha_image = $this->directory . '/' . $randomFile;
            $this->session->set_userdata('ying', md5($randomFile));
            $data['captcha_image'] = $captcha_image;
            // get footer captcha
            $randomFile = $files[array_rand($files)];
            $captcha_image = $this->directory . '/' . $randomFile;
            $this->session->set_userdata('ying-footer', md5($randomFile));
            $data['footer_captcha_image'] = $captcha_image;
        }

        $data['component_text'] = $this->Frontend_model->getComponentTexts($siteLang);
        $data['contact_info'] = $this->Frontend_model->getContactInfo();
        $data['working_hours'] = $this->Frontend_model->getWorkingHours($siteLang);
        $data['area_toggle'] = $this->Frontend_model->getAreaToggle();
        $data['meta'] = $this->Frontend_model->getMeta();

        $data['doctors'] = $this->Frontend_model->getDoctors($siteLang);
        $data['staffs'] = $this->Frontend_model->getStaffs($siteLang);
        $data['patient_reviews'] = $this->Frontend_model->getPatientReviews($siteLang);

        $data['HEADER_BANNER'] = $this->Frontend_model->getPageImages('Home', 'HEADER-BANNER', $siteLang);

        $data['acronym'] = $this->ContactInfo_model->readAcronym()['acronym'];
        $data['sysinfo'] = $this->Systeminfo_model->readSysInfo();
        $data['alerts'] = $this->Alert_model->getAvailableAlert();
        $data['languages'] = $this->Language_model->read();

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

        $this->session->set_userdata("page_status", "community_resources");

        $this->load->view('community_resources', $data);
    }
}
