<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo2 extends CI_Controller {
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
		
	$this->load->view('Admin/Photo2');

	}


	public function AddPhoto()
	{
		
		


		 		$config['upload_path']          = './Photo_Uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
          		$config['encrypt_name'] = true;

          	

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('files'))
                {
            $error = array('error' => $this->upload->display_errors());

 			$this->session->set_flashdata('msg_del','Please attach the Photo');
			redirect(base_url().'Admin/Photo2');
                }
                else
                {

               	 $upload_data = $this->upload->data();
               	 $file1=$upload_data['file_name'];
               	 $pic=base_url().'Photo_Uploads/'.$file1;  

               	 $pid=$this->input->post('pid');


		$this->load->model('Ph2');
		$this->Ph2->AddPhoto($pic,$pid);

                }

	}

		


		public function View_Photo()
	{
		
		$this->load->model('Ph');
		$result['data']=$this->Ph->View_Photo();
		$this->load->view('Admin/View_Photo2',$result);
	}


			


		 public function Deletedata()
	{
	$id=$this->input->get('id');
	$this->load->model('Ph');
	$this->Ph->deletedata($id);
	}

			


}
?>