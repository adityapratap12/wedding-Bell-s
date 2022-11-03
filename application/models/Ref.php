<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref extends CI_Model {



  function AddRef($ref,$name)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into reference(ref,name) values('$ref','$name')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Reference Record has been Created....');

  redirect(base_url().'Admin/Reference');
  }


    public function View_Ref()
  {

    $query_con = $this->db->query("select * from reference");
    return $query_con->result();
  }


      public function VideobyId($id)
  {

    $query_con = $this->db->query("select * from video where id='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from reference where id='".$id."'");
      $this->session->set_flashdata('msg_del','Reference Record has been Successfully Deleted');
 redirect(base_url().'Admin/Reference/View_Ref');
  } 

        public function read_vi()
  {

    $query_emp = $this->db->query("select * from video");
    return $query_emp->num_rows();
  }


}
?>