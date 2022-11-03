<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
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
		
	$this->load->view('Admin/News');

	}


	public function AddNews()
	{
		
		


		 		$config['upload_path']          = './News_Uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
          		$config['encrypt_name'] = true;

          	

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('files'))
                {
            $error = array('error' => $this->upload->display_errors());

 			$this->session->set_flashdata('msg_del','Please attach the News Photo');
			redirect(base_url().'Admin/News');
                }
                else
                {

               	 $upload_data = $this->upload->data();
               	 $file1=$upload_data['file_name'];
               	 $pic=base_url().'News_Uploads/'.$file1;  

               	 $title=$this->input->post('title');

		$des=$this->input->post('des');
		$ddate=$this->input->post('ddate');
			$branch=$this->input->post('branch');

		
		

		$this->load->model('Ne');
		$this->Ne->AddNews($title,$des,$pic,$ddate,$branch);

                }

	}

		


		public function View_News()
	{
		
		$this->load->model('Ne');
		$result['data']=$this->Ne->View_News();
		$this->load->view('Admin/View_News',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Ne');
	$this->Ne->deletedata($id);
	}

			


}
?>