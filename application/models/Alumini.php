<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumini extends CI_Model {



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


    public function View_Alumini()
  {

    $query_con = $this->db->query("select * from alumini ORDER BY id DESC");
    return $query_con->result();
  }

 

      public function Check_Alumini($mob)
  {

    $query_con = $this->db->query("select * from alumini where mob='$mob'");
    $nor=$query_con->num_rows();
    if ($nor>0) {
      redirect(base_url().'Welcome/album');
    }
    else
    {
    redirect(base_url().'Welcome/alumini_reg');
    }
  }


function AddRegistration($name,$fname,$occ,$mob,$email,$address,$yop,$remarks)
  {
  error_reporting(0);
  date_default_timezone_set("Asia/Kolkata");
      $ddate=date("y-m-d");
  $query = $this->db->query("insert into alumini(name,fname,occ,mob,email,address,yop,remarks,ddate) values('$name','$fname','$occ','$mob','$email','$address','$yop','$remarks','$ddate')");

  redirect(base_url().'Welcome/album');
  }


    public function deletedata($id)
  {


  $this->db->query("delete from alumini where id='".$id."'");
      $this->session->set_flashdata('msg_del','Alumini Record has been Successfully Deleted');
 redirect(base_url().'Welcome/View_Alumini');
  } 

        public function read_ev()
  {

    $query_emp = $this->db->query("select * from album");
    return $query_emp->num_rows();
  }


}
?>