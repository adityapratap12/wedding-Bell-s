<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alb extends CI_Model {



  function AddAlbum($title,$des,$dd,$mm,$yyyy)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into album(title,des,dd,mm,yyyy) values('$title','$des','$dd','$mm','$yyyy')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Album Record has been Created....');

  redirect(base_url().'Admin/Album');
  }


    public function View_Album()
  {

    $query_con = $this->db->query("select * from album ORDER BY id DESC");
    return $query_con->result();
  }

 public function View_Photo($id)
  {

    $query_con = $this->db->query("select * from photo2 where pid='$id' ORDER BY id DESC");
    return $query_con->result();
  }



      public function AlbumbyId($id)
  {

    $query_con = $this->db->query("select * from album where id='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from album where id='".$id."'");
      $this->session->set_flashdata('msg_del','Album Record has been Successfully Deleted');
 redirect(base_url().'Admin/Album/View_Album');
  } 

        public function read_ev()
  {

    $query_emp = $this->db->query("select * from album");
    return $query_emp->num_rows();
  }


}
?>