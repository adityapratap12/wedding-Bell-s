<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$admin=$this->session->userdata('admin');
		$this->load->library('phpqrcode/qrlib');
		$this->load->helper('url');

		
	}
	

		public function index()
	{
		
	$this->load->view('Admin/Registration');

	}


	public function AddRegistration()
	{
		
		
    
        $name=$this->input->post('name');
        $dob=$this->input->post('dob');
        $fname=$this->input->post('fname');
        $occ=$this->input->post('occ');
        $mname=$this->input->post('mname');
        $mob=$this->input->post('mob');
        $email=$this->input->post('email');
        $address=$this->input->post('address');
      
        $width=$this->input->post('width');
        $height=$this->input->post('height');
        $uid=$this->input->post('uid');


		$this->load->model('Reg');
		$this->Reg->AddRegistration($name,$dob,$fname,$occ,$mname,$mob,$email,$address,$width,$height,$uid);
	}

		


		public function View_Registration()
	{   
		
		$this->load->model('Reg');
		$result['data']=$this->Reg->View_Registration();
		$this->load->view('Admin/View_Registration',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Reg');
	$this->Reg->deletedata($id);
	}

		

		 public function viewdata()
	{
	$id=$this->input->get('id');
	$this->load->model('Reg');
	$result['data']=$this->Reg->databyid($id);
	$this->load->view('Admin/reg_details',$result);
	}


}
?>