<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {



  function AddCategory($title,$des,$amount)
  {
  error_reporting(0);
  $query = $this->db->query("insert into category(title,des,amount) values('$title','$des','$amount')");

  //sms & email code

  $this->session->set_flashdata('msg','Category has been Created....');

  redirect(base_url().'Admin/Categorys');
  }


    public function VCategory()
  {

    $query_con = $this->db->query("select * from category");
    return $query_con->result();
  }


    public function TCategory()
  {

    $query_con = $this->db->query("select * from category");
   return $query_con->num_rows();
  }





    public function deletedata($id)
  {
  
  $this->db->query("delete from category where id='".$id."'");
  $this->session->set_flashdata('msg_del','Category has been Successfully Deleted');
  redirect(base_url().'Admin/Categorys/VCategory');
  }


    

}
?>