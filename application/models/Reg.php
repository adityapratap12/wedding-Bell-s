<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Model {

        public function read_enq()
  {

    $query_emp = $this->db->query("select * from enquiry");
    return $query_emp->num_rows();
  }


  function AddRegistration($name,$dob,$fname,$occ,$mname,$mob,$email,$address,$width,$height,$uid)
  {
  error_reporting(0);
  date_default_timezone_set("Asia/Kolkata");
      $ddate=date("y-m-d");
  $query = $this->db->query("insert into registration(name,dob,fname,occ,mname,mob,email,address,width,height,uid,ddate) values('$name','$dob','$fname','$occ','$mname','$mob','$email','$address','$width','$height','$uid','$ddate')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Your Registration Record has been Successfully Submitted.');

  redirect(base_url().'Welcome/Registration');
  }


    public function View_Registration()
  {

    $query_con = $this->db->query("select * from registration");
    return $query_con->result();
  }



    public function read_reg()
  {

    $query_emp = $this->db->query("select * from registration");
    return $query_emp->num_rows();
  }


      public function databyid($id)
  {

    $query_con = $this->db->query("select * from registration where id='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from registration where id='".$id."'");
      $this->session->set_flashdata('msg_del','Registration Record has been Successfully Deleted');
 redirect(base_url().'Admin/Registration/View_Registration');
  } 



}
?>