<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vi extends CI_Model {



  function AddVideo($title,$des)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into video(title,url) values('$title','$des')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Video Record has been Created....');

  redirect(base_url().'Admin/Video');
  }


    public function View_Video()
  {

    $query_con = $this->db->query("select * from video");
    return $query_con->result();
  }


      public function VideobyId($id)
  {

    $query_con = $this->db->query("select * from video where id='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from video where id='".$id."'");
      $this->session->set_flashdata('msg_del','Video Record has been Successfully Deleted');
 redirect(base_url().'Admin/Video/View_Video');
  } 

        public function read_vi()
  {

    $query_emp = $this->db->query("select * from video");
    return $query_emp->num_rows();
  }


}
?>