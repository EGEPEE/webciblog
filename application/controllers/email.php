<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	function __construct()
	{
	  parent:: __construct();
	}

  function index(){
		$this->load->view('email/email_view');
  }
	function send_email(){
		$p_from = $this->input->post('p_from');
		$p_to = $this->input->post('p_to');
		$p_subject = $this->input->post('p_subject');
		$p_message = $this->input->post('p_message');

		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => '', /* ambil dari session--user*/
			'smtp_pass' => '', /*ambil dari session--pass*/
			'mailtype' => 'html',
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from($p_from, ''); /*email user*/
		$this->email->to($p_to);
		$this->email->subject($p_subject);
		$this->email->message($p_message);

		if ($this->email->send()) {
			echo "Your email was sent, fool.";
		}else {
			show_error($this->email->print_debugger());
		}
	}
}
