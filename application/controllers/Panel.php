<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller 
{	
	function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION)) session_start();
		if(empty($this->session->username)) redirect("auth/login");
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('panel');
		$this->load->view('template/footer');
	}
}
