<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        $this->load->model('UsersModel')
    }

    public function index()
    {
       redirect(base_url());
    }

    public function updateDM()
    {
        $data = $this->input->post('');
        $this->UsersModel->update_dark_mode($data);
        $this->session->set_userdata('dark_mode', $data);
    }
}