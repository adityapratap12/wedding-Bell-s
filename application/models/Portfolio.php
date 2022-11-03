<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Model {

	
		public function Create($title,$des,$filename)
	{
		$query = $this->db->query("insert into portfolio(title,des,filename)values('$title','$des','$filename')");
		$this->session->set_flashdata('msg','Portfolio is Successfully Uploaded...');
		redirect(base_url().'Admin/Home/Portfolio');
	}

}
?>