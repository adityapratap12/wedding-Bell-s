<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ph2 extends CI_Model {



  function AddPhoto($pic,$pid)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into photo2(image,pid) values('$pic','$pid')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Photos Record has been Created....');

redirect(base_url().'Admin/Album/AddPhoto?id='.$pid);
  }


    public function View_Photo($id)
  {

    $query_con = $this->db->query("select * from photo2 where pid='$id' ORDER BY id DESC");
    return $query_con->result();
  }

     public function View_Photo_S()
  {

    $query_con = $this->db->query("select * from photo2 where branch='0' or branch='1'");
    return $query_con->result();
  }

      public function View_Photo_K()
  {

    $query_con = $this->db->query("select * from photo2 where branch='0' or branch='2'");
    return $query_con->result();
  }


      public function PhotobyId($id)
  {

    $query_con = $this->db->query("select * from photo2 where eid='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {
  $query_con = $this->db->query("select pid from photo2 where id='$id'");
    foreach($query_con->result() as $row)
    {
      $pid=$row->pid;
     }

  $this->db->query("delete from photo2 where id='".$id."'");
 
      $this->session->set_flashdata('msg_del','Photo Record has been Successfully Deleted');
 redirect(base_url().'Admin/Album/ViewPhoto?id='.$pid);
  } 

        public function read_ph()
  {

    $query_emp = $this->db->query("select * from photo2");
    return $query_emp->num_rows();
  }


}
?>