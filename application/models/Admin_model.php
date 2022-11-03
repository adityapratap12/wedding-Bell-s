<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
		public function updatepassword($password)
	{
		$query=$this->db->query("update admin SET password='$password' where username='admin'");
	$this->session->set_flashdata('msg','Password has been Successfully Updated');
	redirect(base_url().'Admin/Home/Password');
	}

	public function getByUsername($username)
	{
		
		//$this->db->where('username','$username');
		//$admin=$this->db->get('admin')->row_array();

		$query = $this->db->query("select * from admin where username='$username'");

		if ($query->num_rows() > 0)
		{
   		return $admin = $query->row_array();

   //echo $row['id'];
   //echo $row['username'];
   //echo $row['password'];
		}

	
	}
}
?>