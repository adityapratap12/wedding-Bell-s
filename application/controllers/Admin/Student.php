<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
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
		
	$this->load->view('Admin/Student');

	}


	public function AddStudent()
	{
		
		


		 		$config['upload_path']          = './Stu_Uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
          		$config['encrypt_name'] = true;

          	

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('files'))
                {
            $error = array('error' => $this->upload->display_errors());

 			$this->session->set_flashdata('msg_del','Please attach Photo of the Student');
			redirect(base_url().'Admin/Student');
                }
                else
                {

               	 $upload_data = $this->upload->data();
               	 $file1=$upload_data['file_name'];
               	 $pic=base_url().'Stu_Uploads/'.$file1;  

               	 $name=$this->input->post('name');

		$cclass=$this->input->post('desi');
		$branch=$this->input->post('branch');

		
		

		$this->load->model('Stu');
		$this->Stu->AddStudent($name,$cclass,$pic,$branch);

                }

	}

		


		public function View_Student()
	{
		
		$this->load->model('Stu');
		$result['data']=$this->Stu->View_Student();
		$this->load->view('Admin/View_Student',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Stu');
	$this->Stu->deletedata($id);
	}

			


}
?>