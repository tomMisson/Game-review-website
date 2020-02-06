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

        // Load in your Models below.
        $this->load->model('ReviewModel');
    }

    public function index()
    {
        $data['body'] = 'login';
        $this->load->view('template', $data);
    }

    public function auth($token)
    {
        $data['body'] = 'review';
        $data['result'] = $this->ReviewModel->getReview($slug);
        
        //Load the view and send the data accross.
        $this->load->view('template', $data);
    }
}