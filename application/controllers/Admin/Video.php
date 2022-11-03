<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
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
		
	$this->load->view('Admin/Video');

	}


	public function AddVideo()
	{
		
		
               	 $title=$this->input->post('title');

		$des=$this->input->post('des');
		
		
		$this->load->model('Vi');
		$this->Vi->AddVideo($title,$des);

              

	}

		


		public function View_Video()
	{
		
		$this->load->model('Vi');
		$result['data']=$this->Vi->View_Video();
		$this->load->view('Admin/View_Video',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Vi');
	$this->Vi->deletedata($id);
	}

			


}
?>