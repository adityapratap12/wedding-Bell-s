<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_M extends CI_Model {



  function AddEvent($title)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into service_category(title) values('$title')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Category Record has been Created....');

  redirect(base_url().'Admin/Service_C');
  }


    public function View_Services()  
  {

    $query_con = $this->db->query("select * from service_category  ");
    return $query_con->result();
  }


   public function View_Services_ads()  
  {

    $query_con = $this->db->query("select * from services  ");
    return $query_con->result();
  }

  public function View_gallery()  
  {

    $query_con = $this->db->query("select * from event ORDER BY id DESC limit 8 ");
    return $query_con->result();
  }


    public function View_Services_all()
  {

    $query_con = $this->db->query("select * from service_category ORDER BY id DESC");
    return $query_con->result();
  }

 public function View_Services_alls()
  {

    $query_con = $this->db->query("select * from service_category ORDER BY id DESC");
    return $query_con;;
  }
 public function View_Service($id)
  {

    $query_con = $this->db->query("select * from services where pid='$id' ORDER BY id DESC");
    return $query_con->result();
  }


      public function EventbyId($id)
  {

    $query_con = $this->db->query("select * from event where id='$id'");
    return $query_con->result();
  }


  public function Venue()
  {

    $query_con = $this->db->query("select * from services where pid='13' ORDER BY id DESC");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from service_category where id='".$id."'");
      $this->session->set_flashdata('msg_del','Category Record has been Successfully Deleted');
 redirect(base_url().'Admin/Service_C/View_Services');
  } 

        public function read_ev()
  {

    $query_emp = $this->db->query("select * from event");
    return $query_emp->num_rows();
  }

     public function Find($category,$location)
  {

    $query_con = $this->db->query("select * from services where address like '%$location%' and pid='$category'");

    return $query_con->result();
  }

      public function Find2($services,$location,$price_max,$price_min)
  {

    $query_con = $this->db->query("select * from services where address like '%$location%' and pid='$services' and bamount BETWEEN '$price_min' AND '$price_max'");

    return $query_con->result();
  }

}
?>