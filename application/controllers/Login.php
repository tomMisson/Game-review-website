<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        
    }

    public function index()
    {
        $data['body'] = 'login';
        $this->load->view('template', $data);
    }

    public function login()
    {
        $email = $this->input->post('username');
        $password = $this->input->post('password');


    }
}