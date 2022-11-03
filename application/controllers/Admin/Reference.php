<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Reference extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$admin=$this->session->userdata('admin');
		$this->load->library('phpqrcode/qrlib');
		$this->load->helper('url');

		if (empty($admin)) {
			$this->session->set_flashdata('msg','Session has been Expired....');
			redirect(base_url().'Admin/Login/index');
		}
	}
	

		public function index()
	{
		
	$this->load->view('Admin/Reference');

	}


	public function Add()
	{
		
		
               	 $ref=$this->input->post('ref');

		$name=$this->input->post('name');
		
		
		$this->load->model('Ref');
		$this->Ref->AddRef($ref,$name);

              

	}

		


		public function View_Ref()
	{
		
		$this->load->model('Ref');
		$result['data']=$this->Ref->View_Ref();
		$this->load->view('Admin/View_Ref',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Ref');
	$this->Ref->deletedata($id);
	}

			


}
?>