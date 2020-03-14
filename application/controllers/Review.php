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

    // redirects to home if you do /reviews... means no direct access to non specific reviews
    public function index()
    {
        redirect(base_url());
    }

    //Retrives data for a specific review
    public function review($slug)
    {
        $data['body'] = 'review';
        $data['result'] = $this->ReviewModel->getReview($slug);
        
        //Load the view and send the data accross.
        $this->load->view('template', $data);
    }

    //Searches the database for reviews similar to the search term 
    public function search()
    {
        $data['resultList'] = $this->ReviewModel->searchForReview($this->input->post('searchtxt'));
        $data['body'] = 'results';
        $this->load->view('template', $data);
    }

    //Retrives all comments for a specif review
    public function getComments()
    {
        $data['comments'] = $this->ReviewModel->getComments($this->input->get('slug'));
        echo json_encode($data['comments']);
    }

    //Adds a comment to the database
    public function postComments()
    {
        $commentText = $this->input->post('text');
        $slug = $this->input->post('slug');
        $username = $this->session->userdata('username');
        $response = $this->ReviewModel->postComment($commentText, $username,  $slug);
    }

}