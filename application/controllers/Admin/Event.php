<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
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
		
	$this->load->view('Admin/Event');

	}


	public function AddEvent()
	{
		
		
               	 $title=$this->input->post('title');

		
		$this->load->model('Ev');
		$this->Ev->AddEvent($title);

              

	}

		


		public function View_Event()
	{
		
		$this->load->model('Ev');
		$result['data']=$this->Ev->View_Event();
		$this->load->view('Admin/View_Event',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Ev');
	$this->Ev->deletedata($id);
	}


			 public function Deletedata_photo()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph');
	$this->Ph->deletedata($id);
	}


			
			 public function AddPhoto()
	{
	$id=$this->input->get('id');
	$result['data']=$id;
	$this->load->view('Admin/Photo',$result);
	}

			 public function ViewPhoto()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph');
	$result['data']=$this->Ph->View_Photo($id);
	$this->load->view('Admin/View_Photo',$result);
	}



}
?>