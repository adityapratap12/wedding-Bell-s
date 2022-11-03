<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		//echo $pas=password_hash('wedding@123', PASSWORD_DEFAULT);
		$this->load->library('form_validation');
		$this->load->view('Admin/Login');
		
	}

public function Authenticate()
{
	$this->load->library('form_validation');
	$this->load->model('Admin_model');

	$this->form_validation->set_rules('username','UserName','trim|required');
	$this->form_validation->set_rules('password','Password','trim|required');

	if ($this->form_validation->run()==true) {
		$username=$this->input->post('username');
		$admin=$this->Admin_model->getByUsername($username);
		//print_r($admin);

	if(!empty($admin))
 	{
 		$password=$this->input->post('password');
 		if (password_verify($password, $admin['password'])==true) {
 		$adminArray['admin_id']=$admin['id'];
 		$adminArray['username']=$admin['username'];
 		$this->session->set_userdata('admin',$adminArray);
 		redirect(base_url().'Admin/Home');
 		}
 		else
 		{
 		$this->session->set_flashdata('msg','Either Password in incorrect');
		redirect(base_url().'Admin/Login/index');
 		}
	}
	else
	{
		
	$this->session->set_flashdata('msg','Either UserName or Password in incorrect');
		redirect(base_url().'Admin/Login/index');
	}
  }
	else
	{
		$this->load->view('Admin/Login');
	}
	
}
	public function Logout()
	{
		$this->session->unset_userdata('admin');
		redirect(base_url().'Admin/Login/index');
	}

	public function Updatepassword($password)
	{
		$query=$this->db->query("update admin SET password='$password' where username='admin'");
	$this->session->set_flashdata('msg_update','Password has been Successfully Updated');
	redirect(base_url().'admin/home/password');
	}
}
?>