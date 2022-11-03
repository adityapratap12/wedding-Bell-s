<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ev extends CI_Model {



  function AddEvent($title)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into event(title) values('$title')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Category Record has been Created....');

  redirect(base_url().'Admin/Event');
  }


    public function View_Event()
  {

    $query_con = $this->db->query("select * from event ORDER BY id DESC");
    return $query_con->result();
  }

 public function View_Photo($id)
  {

    $query_con = $this->db->query("select * from photo where pid='$id' ORDER BY id DESC");
    return $query_con->result();
  }


      public function EventbyId($id)
  {

    $query_con = $this->db->query("select * from event where id='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from event where id='".$id."'");
      $this->session->set_flashdata('msg_del','Category Record has been Successfully Deleted');
 redirect(base_url().'Admin/Event/View_Event');
  } 

        public function read_ev()
  {

    $query_emp = $this->db->query("select * from event");
    return $query_emp->num_rows();
  }


}
?>