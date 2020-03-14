<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        // Load in your Models below.
        $this->load->model('HomeModel');
        
        // Consider creating new Models for different functionality.
    }

    public function index()
    {
        // Check to see if the User exists on the homepage. You will need to change this to look up the existance of a cookie.
        $userExists = '';

        //Load data required for web page in array.


        // Change this to whatever title you wish.
        $data['title']       = 'Games Reviews';

        // Condition checking if the user exists.
        if (!$userExists)
        {
            //The user doesn't exist so change your page accordigly.
        }
        else
        {
            //The user does exist so change your page accordigly.
        }

        $data['body'] = 'home';
        // Get the data from our Home Model.
        $data['result'] = $this->HomeModel->getGame();
        
        //Load the view and send the data accross.
        $this->load->view('template', $data);
    }

    //Toggles dark mode
    public function changeDarkmode()
    {
        //updates session variable and passes the new darkmode value in to the database to persist the data
        $this->HomeModel->changeDarkMode($this->input->post("dark-mode"));
        $this->session->set_userdata('dark_mode',$this->input->post("dark-mode"));
    }

    //Toggles admin
    public function changeAdmin()
    {
        //updates session variable and passes the new admin value in to the database to persist the data
        $this->HomeModel->changeAdmin($this->input->post("admin"));
        $this->session->set_userdata('admin',$this->input->post("admin"));
    }

    //retrives admin status for chat system
    public function getStatus()
    {
        $result = $this->HomeModel->isAdmin(); //fetch from model
        foreach($result as $res)
        {
            echo $res->IsAdmin;//display value to be recived by a AJAX request
        }
    }
}