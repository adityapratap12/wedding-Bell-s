<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp extends CI_Model {



  function AddEmployee($name,$mob,$eid,$desi,$pic,$branch)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into teacher(name,mob,eid,designation,image,branch,password) values('$name','$mob','$eid','$desi','$pic','$branch','$mob')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Teacher Record has been Created....');

  redirect(base_url().'Admin/Employee');
  }


    public function View_Employee()
  {

    $query_con = $this->db->query("select * from teacher");
    return $query_con->result();
  }

    public function View_Employee_S()
  {

    $query_con = $this->db->query("select * from teacher where branch='0' or branch='1'");
    return $query_con->result();
  }

     public function View_Employee_K()
  {

    $query_con = $this->db->query("select * from teacher where branch='0' or branch='2'");
    return $query_con->result();
  }


      public function EmployeebyId($id)
  {

    $query_con = $this->db->query("select * from teacher where eid='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from teacher where id='".$id."'");
      $this->session->set_flashdata('msg_del','Teacher Record has been Successfully Deleted');
 redirect(base_url().'Admin/Employee/View_Employee');
  } 


    public function read_emp()
  {

    $query_emp = $this->db->query("select * from teacher");
    return $query_emp->num_rows();
  }

}
?>