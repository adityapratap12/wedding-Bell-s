<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
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
		
	$this->load->view('Admin/Employee');

	}


	public function AddEmployee()
	{
		
		


		 		$config['upload_path']          = './Uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
          		$config['encrypt_name'] = true;

          	

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('files'))
                {
            $error = array('error' => $this->upload->display_errors());

 			$this->session->set_flashdata('msg_del','Please attach Photo of the Employee');
			redirect(base_url().'Admin/Employee');
                }
                else
                {

               	 $upload_data = $this->upload->data();
               	 $file1=$upload_data['file_name'];
               	 $pic=base_url().'Uploads/'.$file1;  

               	 $name=$this->input->post('name');
		$mob=$this->input->post('mob');
		$eid=$this->input->post('eid');
		$desi=$this->input->post('desi');
		$branch=$this->input->post('branch');

		
		

		$this->load->model('Emp');
		$this->Emp->AddEmployee($name,$mob,$eid,$desi,$pic,$branch);

                }

	}

		


		public function View_Employee()
	{
		
		$this->load->model('Emp');
		$result['data']=$this->Emp->View_Employee();
		$this->load->view('Admin/View_Employee',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Emp');
	$this->Emp->deletedata($id);
	}

			


}
?>