<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_C extends CI_Controller {
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
		
	$this->load->view('Admin/Services');

	}


	public function AddService()
	{
		
		
         $title=$this->input->post('title');

		
		$this->load->model('Service_M');
		$this->Service_M->AddEvent($title);

              

	}

		


		public function View_Services()
	{
		
		$this->load->model('Service_M');
		$result['data']=$this->Service_M->View_Services();
		$this->load->view('Admin/View_Services',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Service_M');
	$this->Service_M->deletedata($id);
	}


			 public function Deletedata_photo()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph3');
	$this->Ph3->deletedata($id);
	}


			
			 public function AddPhoto()
	{
	$id=$this->input->get('id');
	$result['data']=$id;
	$this->load->view('Admin/Photo3',$result);
	}

			 public function ViewPhoto()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph3');
	$result['data']=$this->Ph3->View_Ser_details($id);
	$this->load->view('Admin/View_Service_category',$result);
	}



}
?>