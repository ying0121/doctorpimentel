<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('America/New_York');

class Verify extends CI_Controller
{
    public $directory = './assets/two-captcha';

    function __construct()
    {
        $this->load->model('Verify_model');
        $this->load->model('Frontend_model');
    }

    public function index()
    {
        $area_toggle = $this->Frontend_model->getAreaToggle();
        if ($area_toggle['vault_area'] == 0)
            redirect('Home', 'refresh');

        if ($this->session->userdata('language'))
            $siteLang = $this->session->userdata('language');
        else
            $siteLang = 'es';

        // get random two-captcha image
        $files = array_diff(scandir($this->directory), array('..', '.'));
        if (empty($files)) {
            error_log('===================================');
        } else {
            // for footer signup captcha
            $randomFile = $files[array_rand($files)];
            $captcha_image = $this->directory . '/' . $randomFile;
            $this->session->set_userdata('ying-footer', md5($randomFile));
            $data['footer_captcha_image'] = $captcha_image;
        }

        $data['component_text'] = $this->Frontend_model->getComponentTexts($siteLang);
        $data['contact_info'] = $this->Frontend_model->getContactInfo();
        $data['area_toggle'] = $this->Frontend_model->getAreaToggle();
        $data['working_hours'] = $this->Frontend_model->getWorkingHours($siteLang);
        $data['security'] = 0;
        $data['url'] = $this->config->item('base_url') . 'verify/' . $verify_key;

        $this->session->set_userdata('page_status', 'verify');

        $this->load->view('login', $data);
    }

    public function submit($verify_key)
    {
        $area_toggle = $this->Frontend_model->getAreaToggle();
        if ($area_toggle['vault_area'] == 0)
            redirect('Home', 'refresh');

        if ($this->session->userdata('language'))
            $siteLang = $this->session->userdata('language');
        else
            $siteLang = 'es';

        $data['component_text'] = $this->Frontend_model->getComponentTexts($siteLang);
        $data['contact_info'] = $this->Frontend_model->getContactInfo();
        $data['area_toggle'] = $this->Frontend_model->getAreaToggle();
        $data['working_hours'] = $this->Frontend_model->getWorkingHours($siteLang);
        $data['security'] = 0;
        $data['url'] = $this->config->item('base_url') . 'verify/' . $verify_key;

        $this->session->set_userdata('page_status', 'verify');

        $this->load->view('login', $data);
    }

    public function setLang()
    {
        $lang = $this->input->post('language');
        $this->session->set_userdata('language', $lang);
    }
}
