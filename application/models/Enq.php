<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enq extends CI_Model {

        public function read_enq()
  {

    $query_emp = $this->db->query("select * from enquiry");
    return $query_emp->num_rows();
  }


  function AddEnquiry($name,$cclass,$fname,$mob1,$mob2,$city,$income,$reference,$refby,$gender)
  {
  error_reporting(0);
  date_default_timezone_set("Asia/Kolkata");
      $ddate=date("y-m-d");
  $query = $this->db->query("insert into enquiry(name,cclass,fname,mob1,mob2,city,income,reference,refby,gender,ddate) values('$name','$cclass','$fname','$mob1','$mob2','$city','$income','$reference','$refby','$gender','$ddate')");

   /* $query_con = $this->db->query("select * from customer");
    foreach ($query_con->result() as $row) {
    	$id=$row->id;
    }
   */

  $this->session->set_flashdata('msg','Your Enquiry has been Sent Successfully....');

  redirect(base_url().'Welcome/index');
  }


    public function View_Enquiry()
  {

    $query_con = $this->db->query("select * from enquiry");
    return $query_con->result();
  }


      public function EnquirybyId($id)
  {

    $query_con = $this->db->query("select * from Enquiry where id='$id'");
    return $query_con->result();
  }



    public function deletedata($id)
  {


  $this->db->query("delete from enquiry where id='".$id."'");
      $this->session->set_flashdata('msg_del','Enquiry Record has been Successfully Deleted');
 redirect(base_url().'Admin/Enquiry/View_Enquiry');
  } 

    function get_details($id){
    //$query = $this->db->get_where('sub_category', array('subcategory_category_id' => $category_id));

     $query = $this->db->query("select * from reference where ref='$id'");
    return $query;
  }

}
?>