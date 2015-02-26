<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Mobilepos extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}		
	public function index()
	{
		//목록
		$this->load->view('mobilepos/tpl/header');
		$data['total_rows'] = $this->db->count_all_results('ci_posboard');
		$this->load->view('mobilepos/tpl/boardlist',$data);
		$this->load->view('mobilepos/tpl/footer');
	}
	public function board()
	{
		$this->load->view('mobilepos/tpl/header');
		$this->load->view('mobilepos/tpl/write');
		$this->load->view('mobilepos/tpl/footer');
	}
	public function writenpost()
	{
		
        $this->title = $_POST['title'];
        $this->name = $_POST['name'];
		$this->script = $_POST['script'];
        $this->becreated  = date('Y-m-d H:i:s', time() );
        $this->db->insert('ci_posboard',$this);
		 $this->load->helper('url');
		redirect('/Mobilepos/index');
	}
}
?>