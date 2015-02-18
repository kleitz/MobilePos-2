<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Mobilepos extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}		
	public function index()
	{
		$this->load->view('mobilepos/tpl/header');
		$this->load->view('mobilepos/tpl/main');
		$this->load->view('mobilepos/tpl/footer');
	}
}
?>