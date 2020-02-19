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

        $this->load->model('UsersModel');
    }

    public function index()
    {
        $data['body'] = 'login';
        $this->load->view('template', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->UsersModel->validate_user($username, $password)>=1)
        {
            $userData = $this->UsersModel->retrive_user_data($username);

            foreach($userData as $user)
            {
                $darkmode = $user->DarkMode;
                $UID = $user->UID;
            }

            $sessionData = array(

                'username' => $username,
                'dark_mode' => $darkmode,
                'UID' => $UID,
                'loggedIn' => TRUE
            );

            $this->session->set_userdata($sessionData);
            redirect(base_url());
        }
    }

    public function logout()
    {
        $_SESSION = array();
        redirect(base_url());
    }
}