<?php

class Login extends CI_Controller{

  function __construct()
  {
    Parent:: __construct();
    // $this->load->library('session');
  }

  function index(){
    if ($this->session->userdata('logged_id')) {
      redirect('home', 'refresh');
    }else {
      $this->load->view('login/login_view.php');
    }
  }
}

 ?>
