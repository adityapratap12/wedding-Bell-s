<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_C extends CI_Controller {
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
		
	$this->load->view('Admin/Packages');

	}


	public function AddPackage()
	{
		$config['upload_path']          = './News_Uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
          		$config['encrypt_name'] = true;

          	

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('files'))
                {
            $error = array('error' => $this->upload->display_errors());

 			$this->session->set_flashdata('msg_del','Please attach the Package Photo');
			redirect(base_url().'Admin/News');
                }
                else
                {

               	 $upload_data = $this->upload->data();
               	 $file1=$upload_data['file_name'];
               	 $pic=base_url().'News_Uploads/'.$file1;  
		
         $title=$this->input->post('title');
         $des=$this->input->post('des');

		
		$this->load->model('Package_M');
		$this->Package_M->AddEvent($title,$des,$pic);

         }     

	}

		


		public function View_Packages()
	{
		
		$this->load->model('Package_M');
		$result['data']=$this->Package_M->View_Package();
		$this->load->view('Admin/View_Packages',$result);
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
	$this->load->model('Service_M');
	$this->load->model('Package_M');
	$result['data1']=$this->Package_M->View_Package1();
	$result['data2']=$this->Package_M->View_Package2();
	$result['data3']=$this->Package_M->View_Package3();
	$result['data4']=$this->Package_M->View_Package4();
	$result['data5']=$this->Package_M->View_Package5();
	$result['data6']=$this->Package_M->View_Package6();

	$this->load->view('Admin/Photo4',$result);
	}

			 public function ViewPhoto()
	{
	$id=$this->input->get('id');
	$this->load->model('Package_M');
	$result['data']=$this->Package_M->View_Ser_details($id);
	$this->load->view('Admin/View_Package_category',$result);
	}


	function get_details(){
		$id = $this->input->post('id',TRUE);
		$this->load->model('Package_M');
		$data = $this->Package_M->get_details($id)->result();
		echo json_encode($data);
	}



}
?>