<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller 
{
	function __construct()
	{
		
		parent::__construct();
		$this->load->database();
		$this->load->model('todo_m');
		$this->load->helper(array('url', 'date'));
	}
	
	public function index()
	{
		$this->lists();
	}
	
	public function lists()
	{
		$data["list"] = $this->todo_m->get_list();
		$this->load->layout('list_b', $data);
	}
	
	public function view( $id=-1 )
	{
		if($id === -1)
		{
			alertMsg("게시물이 없습니다.", "/main/lists/");
			
			return;
		}
		
		$data = array("id"=>$id,"views"=>$this->todo_m->get_view($id));
		$this->load->layout('list_v', $data);
	}
	
	public function write()
	{
		$this->load->layout('list_w', null);
	}
}
