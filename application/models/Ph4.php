<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ph4 extends CI_Model {



  function AddPhoto($pid,$veneu,$catering,$decoration,$photographer,$sum)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into packages(pid,veneu,catering,decoration,photographer,sum) values('$pid','$veneu','$catering','$decoration','$photographer','$sum')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */
  
  $this->session->set_flashdata('msg','Package Record has been Created....');

  redirect(base_url().'Admin/Package_C/AddPhoto?id='.$pid);
  }


    public function View_Ser_details($id)
  {

    $query_con = $this->db->query("select * from packages where pid='$id' ORDER BY id DESC");
    return $query_con->result();
  }

      public function View_Photo_all()
  {

    $query_con = $this->db->query("select * from services ORDER BY id DESC limit 8");
    return $query_con->result();
  }

     public function View_Photo2($id)
  {

    $query_con = $this->db->query("select * from services where id='$id'");
    return $query_con->result();
  }


public function gallery_viewss()
  {

    $query_con = $this->db->query("select * from photo ORDER BY id DESC limit 8 ");
    return $query_con->result();
  }

public function gallery()
  {

    $query_con = $this->db->query("select * from photo ");
    return $query_con->result();
  }



public function gallery_videos()
  {

    $query_con = $this->db->query("select * from video ORDER BY id DESC limit 8 ");
    return $query_con->result();
  }

  public function videos()
  {

    $query_con = $this->db->query("select * from video  ");
    return $query_con->result();
  }


 public function gallery_views($id)
  {

    $query_con = $this->db->query("select * from photo where pid='$id'");
    return $query_con->result();
  }






   public function View_package_details($id)
  {

    $query_con = $this->db->query("select * from packages where pid='$id'");
    return $query_con->result();
  }

     public function details($id)
  {

    $query_con = $this->db->query("select * from services where id='$id'");
    return $query_con->result();
  }


  public function get_details($id)
  {

    $query_con = $this->db->query("select * from packages where pid='$id'");
    return $query_con->result();
  }


  public function View_package_detailss($id)
  {

    $query_con = $this->db->query("select * from package_category where id='$id'");
    return $query_con->result();
  }

public function View_Photo21($id)
  {

    $query_con = $this->db->query("select * from services where id='$id'");
    return $query_con->result();
  }




    public function deletedata($id)
  {


 $query_con = $this->db->query("select pid from services where id='$id'");
    foreach($query_con->result() as $row)
    {
      $pid=$row->pid;
     }

  $this->db->query("delete from services where id='".$id."'");
 
      $this->session->set_flashdata('msg_del','Service Record has been Successfully Deleted');
 redirect(base_url().'Admin/Service_C/ViewPhoto?id='.$pid);
  } 

        public function read_ph()
  {

    $query_emp = $this->db->query("select * from photo");
    return $query_emp->num_rows();
  }


}
?>