<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ph extends CI_Model {



  function AddPhoto($pic,$pid,$title,$des)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into photo(image,pid,title,des) values('$pic','$pid','$title','$des')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Product Record has been Created....');

  redirect(base_url().'Admin/Event/AddPhoto?id='.$pid);
  }


 public function View_Venue()
  {

    $query_con = $this->db->query("select * from services where pid='13' ORDER BY id DESC");
    return $query_con->result();
  }
    public function View_Photo($id)
  { 

    $query_con = $this->db->query("select * from services where pid='$id' ORDER BY id DESC");
    return $query_con->result();
  }

      public function View_Photo_all()
  {

    $query_con = $this->db->query("select * from photo ORDER BY id DESC limit 8");
    return $query_con->result();
  }

     public function View_Photo2($id)
  {

    $query_con = $this->db->query("select * from photo where id='$id'");
    return $query_con->result();
  }




    public function deletedata($id)
  {


 $query_con = $this->db->query("select pid from photo where id='$id'");
    foreach($query_con->result() as $row)
    {
      $pid=$row->pid;
     }

  $this->db->query("delete from photo where id='".$id."'");
 
      $this->session->set_flashdata('msg_del','Product Record has been Successfully Deleted');
 redirect(base_url().'Admin/Event/ViewPhoto?id='.$pid);
  } 

        public function read_ph()
  {

    $query_emp = $this->db->query("select * from photo");
    return $query_emp->num_rows();
  }


}
?>