<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo4 extends CI_Controller {
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
		
	$this->load->view('Admin/Photo3');

	}


	public function AddPhoto1()
	{
				$pid=$this->input->post('pid');
				$veneu=$this->input->post('veneu');
				$catering=$this->input->post('catering');
				$decoration=$this->input->post('decoration');
				$photographer=$this->input->post('photographer');
				$sum=$this->input->post('sum');
				


		$this->load->model('Ph4');
		$this->Ph4->AddPhoto($pid,$veneu,$catering,$decoration,$photographer,$sum);

                

	}

	

		


		public function View_Photo()
	{
		
		$this->load->model('Ph');
		$result['data']=$this->Ph->View_Photo();
		$this->load->view('Admin/View_Photo',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph');
	$this->Ph->deletedata($id);
	}

			


}
?>