<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Booking extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$conf = array('start_day'=>'monday','show_next_prev'=> true,'next_prev_url'=>'http://soodin.cafe24.com/ci3/booking/index');
		//한주가 시작하는 날, 다음달 넘기기(true/false), 시작 url을 설정할수있다.
		$conf['template'] = '
		   {table_open}<table class="table" border="0" cellpadding="0" cellspacing="0">{/table_open}
		   {heading_row_start}<tr>{/heading_row_start}
		   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
		   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
		   {heading_row_end}</tr>{/heading_row_end}
		   {week_row_start}<tr>{/week_row_start}
		   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
		   {week_row_end}</tr>{/week_row_end}
		   {cal_row_start}<tr>{/cal_row_start}
		   {cal_cell_start}<td>{/cal_cell_start}
		   {cal_cell_content}
		   <div>{day}</div>
		   <div>{content}</div>
		   {/cal_cell_content}
		   {cal_cell_content_today}
		   <div>{day}</div>
		   <div>{content}</div>
		   {/cal_cell_content_today}
		   {cal_cell_no_content}{day}{/cal_cell_no_content}
		   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}
		   {cal_cell_blank}&nbsp;{/cal_cell_blank}
		   {cal_cell_end}</td>{/cal_cell_end}
		   {cal_row_end}</tr>{/cal_row_end}
		   {table_close}</table>{/table_close}
		';
		$this->load->library('calendar',$conf);
	}		
	public function index()//파라미터로 년도와 날짜를 받는다.
	{
		
		$dday = array(
               3  => 'foo',
               7  => 'ddd',
               13 => '2',
               26 => '예약날짜'
             );
		
		$data['booking_calendar'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4),$dday);
		//변수에 넣음  이부분을 수정하여 입력을 만듬.
		$this->load->view('mobilepos/tpl/header');
		$this->load->view('mobilepos/tpl/booking',$data); //뷰전달
		$this->load->view('mobilepos/tpl/footer');	
	}
}
?>