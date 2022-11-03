<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stu extends CI_Model {



  function AddStudent($name,$cclass,$pic,$branch)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into student(name,cclass,image,branch) values('$name','$cclass','$pic','$branch')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Student Record has been Created....');

  redirect(base_url().'Admin/Student');
  }


    public function View_Student()
  {

    $query_con = $this->db->query("select * from student");
    return $query_con->result();
  }

     public function View_Student_S()
  {

    $query_con = $this->db->query("select * from student where branch='0' or branch='1'");
    return $query_con->result();
  }

       public function View_Student_K()
  {

    $query_con = $this->db->query("select * from student where branch='0' or branch='2'");
    return $query_con->result();
  }


      public function StudentbyId($id)
  {

    $query_con = $this->db->query("select * from student where eid='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from student where id='".$id."'");
      $this->session->set_flashdata('msg_del','Student Record has been Successfully Deleted');
 redirect(base_url().'Admin/Student/View_Student');
  } 

      public function read_stu()
  {

    $query_emp = $this->db->query("select * from student");
    return $query_emp->num_rows();
  }

}
?>