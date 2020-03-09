<?php

$this->load->helper('cookie', 'session');

$userdata['loggedIn'] = $this->session->has_userdata('loggedIn');
$userdata['darkmode'] = $this->session->userdata('dark_mode');
$userdata['admin'] =  $this->session->userdata('admin');

$this ->load->view('partials/header', $userdata);
$this ->load->view($body);
$this ->load->view('partials/footer');