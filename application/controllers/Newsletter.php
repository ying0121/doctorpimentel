<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

class Newsletter extends CI_Controller {

    public $directory = './assets/two-captcha';

	function __construct()
    {
	    parent::__construct();
        $this->load->helper('cookie');
        $this->load->helper('url');

        $this->load->model('ContactInfo_model');
        $this->load->model('Frontend_model');
        $this->load->model('Systeminfo_model');
        $this->load->model('Alert_model');
        $this->load->model('User_model');
        $this->load->model('Settings_model');
	}

	public function index()
	{
		if ($this->session->userdata('language'))
            $siteLang = $this->session->userdata('language');
        else
            $siteLang = 'es';

        // get random two-captcha image
        $files = array_diff(scandir($this->directory), array('..', '.'));
        if (empty($files)) {
            error_log('===================================');
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

        $data['HEADER_BANNER'] = $this->Frontend_model->getPageImages('Newsletter', 'HEADER-BANNER', $siteLang);
        $data['sysinfo'] = $this->Systeminfo_model->readSysInfo();
        $data['alerts'] = $this->Alert_model->getAvailableAlert();
        $data['acronym'] = $this->ContactInfo_model->readAcronym()['acronym'];
        $data['meta'] = $this->Frontend_model->getMeta();

		$data['result'] = $this->User_model->getnewsletter($siteLang);

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

        $this->session->set_userdata("page_status", "newsletter");

		$this->load->view('newsletter',$data);
	}

	public function detail()
    {
		$id = $this->input->get('id');
		
        if ($this->session->userdata('language'))
            $siteLang = $this->session->userdata('language');
        else
            $siteLang = 'es';

        // get random two-captcha image
        $files = array_diff(scandir($this->directory), array('..', '.'));
        if (empty($files)) {
            error_log('===================================');
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

        $data['HEADER_BANNER'] = $this->Frontend_model->getPageImages('Newsletter', 'HEADER-BANNER', $siteLang);
        $data['sysinfo'] = $this->Systeminfo_model->readSysInfo();
        $data['alerts'] = $this->Alert_model->getAvailableAlert();
        $data['acronym'] = $this->ContactInfo_model->readAcronym()['acronym'];
        $data['meta'] = $this->Frontend_model->getMeta();
        
		$data['result'] = $this->User_model->getchosennewsletter($id,$siteLang);

		$this->load->view('newsletterdetail', $data);

	}
}
