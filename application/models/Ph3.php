<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ph3 extends CI_Model {



  function AddPhoto($pic,$pid,$title,$des,$address,$bamount)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into services(image,pid,title,des,address,bamount) values('$pic','$pid','$title','$des','$address','$bamount')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */
  
  $this->session->set_flashdata('msg','Product Record has been Created....');

  redirect(base_url().'Admin/Service_C/AddPhoto?id='.$pid);
  }


    public function View_Ser_details($id)
  {

    $query_con = $this->db->query("select * from services where pid='$id' ORDER BY id DESC");
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