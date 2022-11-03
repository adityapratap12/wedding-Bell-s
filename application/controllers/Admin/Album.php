<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {
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
		
	$this->load->view('Admin/Album');

	}


	public function AddAlbum()
	{
		
		
               	 $title=$this->input->post('title');

		$des=$this->input->post('des');
			$dd=$this->input->post('dd');
				$mm=$this->input->post('mm');
					$yyyy=$this->input->post('yy');
		
		
		$this->load->model('Alb');
		$this->Alb->AddAlbum($title,$des,$dd,$mm,$yyyy);

              

	}

		


		public function View_Album()
	{
		
		$this->load->model('Alb');
		$result['data']=$this->Alb->View_Album();
		$this->load->view('Admin/View_Album',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Alb');
	$this->Alb->deletedata($id);
	}

			
	 public function Deletedata_photo()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph2');
	$this->Ph2->deletedata($id);
	}

			 public function AddPhoto()
	{
	$id=$this->input->get('id');
	$result['data']=$id;
	$this->load->view('Admin/Photo2',$result);
	}

			 public function ViewPhoto()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph2');
	$result['data']=$this->Ph2->View_Photo($id);
	$this->load->view('Admin/View_Photo2',$result);
	}



}
?>