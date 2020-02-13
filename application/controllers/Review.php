<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Controller{

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
        
        // Consider creating new Models for different functionality.
    }

    public function index()
    {
        redirect(base_url());
    }

    public function review($slug)
    {
        $data['body'] = 'review';
        $data['result'] = $this->ReviewModel->getReview($slug);
        
        //Load the view and send the data accross.
        $this->load->view('template', $data);
    }

    public function search($term)
    {
        $data['body'] = 'results';
        $data['result'] = $this->ReviewModel->search($term);
        
        //Load the view and send the data accross.
        $this->load->view('template', $data);
    }

}