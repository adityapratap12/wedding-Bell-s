<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Model {


	public function read_customer()
	{

		$query_cus = $this->db->query("select * from customer");
		return $query_cus->num_rows();
	}

	public function AProject()
	{

		$query_aproject = $this->db->query("select * from apply_pro");
		return $query_aproject->result();
	}


		public function Status($id)
	{

		$query_aproject = $this->db->query("select * from apply_pro where regid='".$id."'");
		return $query_aproject->result();
	}

		public function Transaction($id)
	{

		$query = $this->db->query("select * from trans_project where regid='".$id."'");
		return $query->result();
	}

	
	public function deleteproject($id)
	{
	
	$this->db->query("delete from apply_pro where id='".$id."'");
	$this->session->set_flashdata('msg_del','Applied Project has been Successfully Deleted');
	redirect(base_url().'Admin/Home/AProject');
	}

	function UProject($name,$mob,$email,$msg,$qualification,$gender,$title,$guide,$fel,$bel,$reg,$hod,$dob,$uname,$dep,$regid)
	{

	$query=$this->db->query("update apply_pro SET name='$name', mob='$mob', email='$email', memo='$msg', qualification='$qualification', gender='$gender', title='$title', gname='$guide', fel='$fel', bel='$bel', regno='$reg', sid='$hod', dob='$dob', cname='$uname', dept='$dep' where regid='".$regid."'");
	$this->session->set_flashdata('msg','Project Record has been Successfully Updated');
	redirect(base_url().'Admin/Home/ViewProject?id='.$regid);
	}


	






  function AddBooking($name,$mob,$email,$ddate,$msg,$service,$expart)
  {
  error_reporting(0);
  $query = $this->db->query("insert into booking(name,mob,email,ddate,msg,service,expart) values('$name','$mob','$email','$ddate','$msg','$service','$expart')");

  //sms & email code

  $this->session->set_flashdata('msg','Your Appointment has been Booked.. Wait for Confirmation by Call from our Executive. Thank You......');

  redirect(base_url().'Welcome/index');
  }


    public function VBooking()
  {

    $query_con = $this->db->query("select * from booking where status='0'");
    return $query_con->result();
  }



    public function VBooking2()
  {

    $query_con = $this->db->query("select * from booking where status='1'");
    return $query_con->result();
  }

  public function tbooking()
	{

		$query_cus = $this->db->query("select * from booking");
		return $query_cus->num_rows();
	}

	  public function pbooking()
	{

		$query_cus = $this->db->query("select * from booking where status='0'");
		return $query_cus->num_rows();
	}


    public function deletedata($id)
  {
  
  $this->db->query("delete from booking where id='".$id."'");
  $this->session->set_flashdata('msg_del','Booking Record has been Successfully Deleted');
  redirect(base_url().'Admin/Bookings/VBooking');
  }


    function updatedata($id)
  {
    
  $query=$this->db->query("update booking SET status='1' where id='".$id."'");
  $this->session->set_flashdata('msg','Booking has been Confirm and moved to Apporved List....');
  redirect(base_url().'Admin/Bookings/VBooking');
  }

}
?>