<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$admin=$this->session->userdata('admin');
		$this->load->library('phpqrcode/qrlib');
		$this->load->helper('url');

		
	}
	

		public function index()
	{
		
	$this->load->view('Admin/indax');

	}


	public function AddEnquiry()
	{
		
		
               	 $name=$this->input->post('name');
	$gender=$this->input->post('gender');
		$cclass=$this->input->post('cclass');
			$fname=$this->input->post('fname');
			$mob1=$this->input->post('mob1');
			$mob2=$this->input->post('mob2');
			$city=$this->input->post('city');
			$income=$this->input->post('income');
			$reference=$this->input->post('reference');
			$refby=$this->input->post('refby');
		$this->load->model('Enq');
		$this->Enq->AddEnquiry($name,$cclass,$fname,$mob1,$mob2,$city,$income,$reference,$refby,$gender);

              

	}

		


		public function View_Enquiry()
	{   
		
		$this->load->model('Enq');
		$result['data']=$this->Enq->View_Enquiry();
		$this->load->view('Admin/View_Enquiry',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Enq');
	$this->Enq->deletedata($id);
	}

		
			function get_details(){
		$id = $this->input->post('id',TRUE);
		$this->load->model('Cont');
		$data = $this->Cont->get_details($id)->result();
		echo json_encode($data);
	}	


}
?>