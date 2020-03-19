<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');

        $this->load->model('UsersModel');//Loads database queries class
    }

    //loads the login page
    public function index()
    {
        $data['body'] = 'login';
        $this->load->view('template', $data);
    }

    //gets data from the form, validates it's the same as that in the db
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
                $isAdmin = $user->IsAdmin;

            }
            // if the credentials match, the users data is added to a session
            $sessionData = array(

                'username' => $username,
                'dark_mode' => $darkmode,
                'UID' => $UID,
                'loggedIn' => TRUE,
                'admin' => $isAdmin
            );

            $this->session->set_userdata($sessionData);
            redirect(base_url());// they are then sent to the front page
        }
        else
        {
            $this->UsersModel->addUser($username,$password);
        }
    
    }

    //gets the users data from the session and passes it to the profile view
    public function profile()
    {
        $data['body'] = 'profile';
        $data['admin'] = $this->session->userdata("admin");
        $data['darkmode'] = $this->session->userdata("dark_mode");
        $this->load->view('template', $data);
    }

    //Destroys the session and sends you home, invalidating the current session
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}