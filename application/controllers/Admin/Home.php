<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$admin=$this->session->userdata('admin');
		if (empty($admin)) {
			$this->session->set_flashdata('msg','Session has been Expired....');
			redirect(base_url().'Admin/Login/index');
		}
	}
	public function index()
	{	
		$admin=$this->session->userdata('admin');
		$this->load->model('Emp');
		$this->load->model('Reg');


		$this->load->model('Ph');
		$this->load->model('Vi');
		$this->load->model('Cont');
		$this->load->model('Ev');

		$result['employee']=$this->Emp->read_emp();
		$result['student']=$this->Reg->read_reg();
		$result['event']=$this->Ev->read_ev();

		$result['photo']=$this->Ph->read_ph();
		$result['video']=$this->Vi->read_vi();
		$result['enquiry']=$this->Cont->read_cont();

		$this->load->view('Admin/Dashboard',$result);
	}


		public function AProject()
	{
		$this->load->model('Project');
		$result['data']=$this->Project->AProject();
		$this->load->view('Admin/AProject',$result);
		
	}

	 public function DeleteProject()
	{
	$id=$this->input->get('id');
	$this->load->model('Project');
	$this->Project->deleteproject($id);
	}


	public function Status()
	{
	$id=$this->input->get('id');
	$this->load->model('Project');
	$result['data']=$this->Project->Status($id);
	$this->load->view('Admin/Status',$result);	
	}

	

	public function UpdateStatus()
	{
		$cost=$this->input->post('cost');
		$id=$this->input->post('id');
		$regid=$this->input->post('regid');
		$status=$this->input->post('status');
		$mob=$this->input->post('mob');
		$this->load->model('Project');
		$this->Project->updateproject($cost,$id,$status,$regid,$mob);
	}

	public function ViewProject()
	{
	$id=$this->input->get('id');
	$this->load->model('Project');
	$result['data']=$this->Project->Status($id);
	$this->load->view('Admin/view_project',$result);	
	}

		public function ViewProject2()
	{

		$name=$this->input->post('name');
		$mob=$this->input->post('mob');
		$email=$this->input->post('email');
		$msg=$this->input->post('message');
		$qualification=$this->input->post('qualification');
		$gender=$this->input->post('gender');
		$title=$this->input->post('title');
		$guide=$this->input->post('guide');
		$fel=$this->input->post('fel');
		$bel=$this->input->post('bel');
		$reg=$this->input->post('reg');
		$hod=$this->input->post('hod');
		$dob=$this->input->post('dob');
		$uname=$this->input->post('uname');
		$dep=$this->input->post('dep');
		$regid=$this->input->post('regid');

		$this->load->model('Project');
		$this->Project->UProject($name,$mob,$email,$msg,$qualification,$gender,$title,$guide,$fel,$bel,$reg,$hod,$dob,$uname,$dep,$regid);
	}




	public function Pay()
	{
	$id=$this->input->get('id');
	$this->load->model('Project');
	$result['data']=$this->Project->Status($id);
	$this->load->view('Admin/Pay',$result);	
	}

	

	public function UpdatePay()
	{
		$pay=$this->input->post('pay');
		$id=$this->input->post('id');
		$regid=$this->input->post('regid');
		$mode=$this->input->post('mode');
		$ddate=$this->input->post('ddate');
		$this->load->model('Project');
		$this->Project->updatepay($pay,$id,$mode,$regid,$ddate);
	}

	public function Invoice()
	{
	$id=$this->input->get('id');
	$this->load->model('Project');
	$result['data']=$this->Project->Status($id);
	$result['data2']=$this->Project->Transaction($id);
	$this->load->view('Admin/Invoice',$result);	
	}



	public function Password()
	{
		$this->load->view('Admin/Password');
	}
	public function Updatepassword()
	{
		$password=$this->input->post('password');
		$password=password_hash($password, PASSWORD_DEFAULT);
		$this->load->model('Admin_model');
		$this->Admin_model->updatepassword($password);
	}

	public function Portfolio() {
	$this->load->view('Admin/Portfolio');
	}

	public function Upload() { 
		

		 		$config['upload_path']          = './Uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 5000;
          		$config['encrypt_name'] = true;

          	

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('files'))
                {
             $error = array('error' => $this->upload->display_errors());

 			$this->session->set_flashdata('msg_del','Please attach the File');
			redirect(base_url().'Admin/Home/Portfolio');
                }
                else
                {


               	 $upload_data = $this->upload->data();
               	 $file1=$upload_data['file_name'];
               	 $filename='http://localhost/softnick_new/Uploads/'.$file1; 

                $title=$this->input->post('title');
				 $des=$this->input->post('des');
			
		
				$this->load->model('Portfolio');
				$this->Portfolio->Create($title,$des,$filename);
    
                }

               
      } 

}
?>