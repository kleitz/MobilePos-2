<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Mobilepos extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}		
	function pre($var = false, $var_name = 'VAR INFO')
	{
			echo "<pre>";
			echo "DUMP ::",$var_name,"Wn";
			var_dump($var);
			echo "</pre>";
	}
	
	public function index()
	{
		//목록
		$this->load->view('mobilepos/tpl/header');
		$data['total_rows'] = $this->db->count_all_results('ci_posboard');
		//모든값을 가져와보기
		$list = $this->db->get('ci_posboard');
		$data['list'] = $list->result();
		$this->load->library('pagination');

		$config['base_url'] = 'http://soodin.cafe24.com/ci3/Mobilepos/index';
		$config['total_rows'] = 200;
		$config['per_page'] = 10; 

		$this->pagination->initialize($config); 

echo $this->pagination->create_links();
		$this->load->view('mobilepos/tpl/boardlist',$data);
		$this->load->view('mobilepos/tpl/footer');
	}
	public function boardupdate($seq)
	{
		$this->load->view('mobilepos/tpl/header');
		$list = $this->db->where('seq',$seq)->get('ci_posboard');
		$data['update']=$list->result();
		$this->load->view('mobilepos/tpl/boardupdate',$data);
		$this->load->view('mobilepos/tpl/footer');
	}
	public function boardview($seq)
	{
		$this->load->view('mobilepos/tpl/header');
		$list = $this->db->where('seq',$seq)->get('ci_posboard');
		$data['view']=$list->result();
		$this->load->view('mobilepos/tpl/boardview',$data);
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
	public function boardrewrite($seq)
	{
		$this->load->view('mobilepos/tpl/header');
		$script=$this->input->post('script');
		$updatescript = array();
		$updatescript['script']=$script;
		$chupdate=$this->db->where('seq',$seq)->update('ci_posboard',$updatescript);
		$this->load->view('mobilepos/tpl/updatesu');
		$this->load->view('mobilepos/tpl/footer');
	}
}
?>