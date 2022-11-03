<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ne extends CI_Model {



  function AddNews($title,$des,$pic,$ddate,$branch)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into news(title,des,image,ddate,branch) values('$title','$des','$pic','$ddate','$branch')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','News Record has been Created....');

  redirect(base_url().'Admin/News');
  }


    public function View_News()
  {

    $query_con = $this->db->query("select * from news");
    return $query_con->result();
  }

   public function View_News_S()
  {

    $query_con = $this->db->query("select * from news where branch='0' or branch='1'");
    return $query_con->result();
  }

     public function View_News_K()
  {

    $query_con = $this->db->query("select * from news where branch='0' or branch='2'");
    return $query_con->result();
  }


      public function NewsbyId($id)
  {

    $query_con = $this->db->query("select * from news where eid='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from news where id='".$id."'");
      $this->session->set_flashdata('msg_del','News Record has been Successfully Deleted');
 redirect(base_url().'Admin/News/View_News');
  } 

        public function read_ne()
  {

    $query_emp = $this->db->query("select * from news");
    return $query_emp->num_rows();
  }


}
?>