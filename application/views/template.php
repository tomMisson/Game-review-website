<?php

// takes session variables to be passed to the header, helps determine states and cuts down clutter
$userdata['loggedIn'] = $this->session->has_userdata('loggedIn');
$userdata['darkmode'] = $this->session->userdata('dark_mode');
$userdata['admin'] =  $this->session->userdata('admin');

//Loads a default page structure so that only the main is ever swapped out
$this ->load->view('partials/header', $userdata);
$this ->load->view($body);
$this ->load->view('partials/footer');