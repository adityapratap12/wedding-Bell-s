<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_M extends CI_Model {



  function AddEvent($title,$des,$pic)
  {
  error_reporting(0);
 
  $query = $this->db->query("insert into package_category(title,des,image) values('$title','$des','$pic')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Category Record has been Created....');

  redirect(base_url().'Admin/Package_C');
  }


    public function View_Package()
  {

    $query_con = $this->db->query("select * from package_category ");
    return $query_con->result();
  }

public function View_Pack()
  {

    $query_con = $this->db->query("select * from package_category ORDER BY id DESC limit 8");
    return $query_con->result();
  }

   public function View_Ser_details($id)
  {

    $query_con = $this->db->query("select * from packages where pid='$id' ");
    return $query_con->result();
  }

  public function View_Package_by_id($id)
  {

    $query_con = $this->db->query("select * from services where pid='$id'");
    return $query_con->result();
  }

  public function View_Package1()
  {

    $query_con = $this->db->query("select * from services where pid='13' ORDER BY id DESC");
    return $query_con->result();
  }

  public function View_Package2()
  {

    $query_con = $this->db->query("select * from services where pid='17' ORDER BY id DESC");
    return $query_con->result();
  }

  public function View_Package3()
  {

    $query_con = $this->db->query("select * from services where pid='18' ORDER BY id DESC");
    return $query_con->result();
  }

public function View_Package4()
  {

    $query_con = $this->db->query("select * from services where pid='14' ORDER BY id DESC");
    return $query_con->result();
  }

  public function View_Package5()
  {

    $query_con = $this->db->query("select * from services where pid='17' ORDER BY id DESC");
    return $query_con->result();
  }

  public function View_Package6()
  {

    $query_con = $this->db->query("select * from services where pid='16' ORDER BY id DESC");
    return $query_con->result();
  }




  public function View_Packages()
  {

    $query_con = $this->db->query("select * from services ");
    return $query_con->result();
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


function get_details($id){
    //$query = $this->db->get_where('sub_category', array('subcategory_category_id' => $category_id));

     $query = $this->db->query("select * from services where id='$id'");
    return $query;
  }
  


}
?>