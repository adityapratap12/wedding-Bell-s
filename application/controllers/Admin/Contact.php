<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$admin=$this->session->userdata('admin');
		$this->load->library('phpqrcode/qrlib');
		$this->load->helper('url');

		
	}
	

		public function index()
	{
		
	$this->load->view('Admin/Contact');

	}


	public function AddContact()
	{
		
		
              			$name=$this->input->post('name');
						$lastname=$this->input->post('lastname');
						$email=$this->input->post('email');
						$phone=$this->input->post('phone');
						$category=$this->input->post('category');
						$message=$this->input->post('message');
						$sub=$this->input->post('sub');


						$this->load->model('Cont');
						$this->Cont->AddContact($name,$lastname,$email,$phone,$category,$message);

		
		$this->load->model('Cont');
		$this->Cont->AddContact($name,$lastname,$email,$phone,$category,$message);
              

	}

		


		public function View_Contact()
	{
		
		
		$this->load->model('Cont');
		$result['data']=$this->Cont->View_Contact();
		$this->load->view('Admin/View_Contact',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Cont');
	$this->Cont->deletedata($id);
	}

		
			function get_details(){
		$id = $this->input->post('id',TRUE);
		$this->load->model('Cont');
		$data = $this->Cont->get_details($id)->result();
		echo json_encode($data);
	}	


}
?>