<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont extends CI_Model {



  function AddContact($name,$lastname,$email,$phone,$message,$category)
  {
  error_reporting(0);
  date_default_timezone_set("Asia/Kolkata");
      $ddate=date("y-m-d");

  $query = $this->db->query("insert into contact(name,lastname,email,phone,message,category,ddate) values('$name','$lastname','$email','$phone','$message','$category','$ddate')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Your Enquiry has been Sent....');

 redirect(base_url().'Welcome/Enquiry');
  }


    public function View_Contact()
  {

    $query_con = $this->db->query("select * from contact");
    return $query_con->result();
  }
 public function read_cont()
  {

    $query_emp = $this->db->query("select * from contact");
    return $query_emp->num_rows();
  }

      public function ContactbyId($id)
  {

    $query_con = $this->db->query("select * from contact where id='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from contact where id='".$id."'");
      $this->session->set_flashdata('msg_del','Contact Record has been Successfully Deleted');
 redirect(base_url().'Admin/Contact/View_Contact');
  } 

    function get_details($id){
    //$query = $this->db->get_where('sub_category', array('subcategory_category_id' => $category_id));

     $query = $this->db->query("select * from reference where ref='$id'");
    return $query;
  }

}
?>