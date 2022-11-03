<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function index()
				{ 

				$this->load->model('Ev');
				$result['category']=$this->Ev->View_Event();
	  			$this->load->model('Ph');
				$result['product']=$this->Ph->View_Venue();
				$this->load->model('Service_M');
				$this->load->model('Package_M');

				$this->load->model('Ph4');
				$result['video_gallerys']=$this->Ph4->gallery_videos();

				$result['gallerys']=$this->Ph4->gallery_viewss();
				$result['data']=$this->Service_M->View_Services();
				$result['data1']=$this->Service_M->View_Services_ads();
				$result['gallery']=$this->Service_M->View_gallery();
				$result['pack']=$this->Package_M->View_Pack();

				$this->load->view('Static/index',$result);
				//$this->load->view('Static/index');

}

public function Category()
{
				$id=$this->input->get('id');
				$result['data']=$id;
				$this->load->model('Ev');
				$this->load->model('Ph');
				$this->load->model('Service_M');
				
				$result['data']=$this->Service_M->View_Services();
				$result['data']=$this->Service_M->View_Services();
				$result['gallery']=$this->Service_M->View_gallery();
				$result['category']=$this->Ev->View_Event();
				$result['product']=$this->Ph->View_Photo($id);
				$this->load->view('Static/OurServices',$result);
}




public function Venue()
{
				
	$this->load->model('Service_M');

$result['data']=$this->Service_M->View_Services();

$result['gallery']=$this->Service_M->View_gallery();

				
				$result['venue']=$this->Service_M->Venue();
				
				$this->load->view('Static/Venue',$result);
}

public function Single()
{
				$id=$this->input->get('id');
				$result['data']=$id;
				$this->load->model('Ev');
				$this->load->model('Ph');
				$result['data']=$this->Service_M->View_Services();
				$result['gallery']=$this->Service_M->View_gallery();
				$result['category']=$this->Ev->View_Event();
				$result['product']=$this->Ph->View_Photo2($id);
				$this->load->view('Static/single',$result);
				}


public function about()
				{

				$this->load->model('Ev');

				$this->load->model('Service_M');
				$result['data']=$this->Service_M->View_Services();
				$result['gallery']=$this->Service_M->View_gallery();
				$result['category']=$this->Ev->View_Event();
				$this->load->view('Static/about',$result);

				}

public function Service_details()
				{
				$id=$this->input->get('id');
				$result['data']=$id;

				$this->load->model('Ph4');
				$this->load->model('Service_M');

				$result['data']=$this->Service_M->View_Services();
				$result['gallery']=$this->Service_M->View_gallery();
				$result['product']=$this->Ph4->View_Photo2($id);
				$result['product1']=$this->Ph4->View_Photo21($id);

				$this->load->view('Static/Service_details',$result);

}


public function Gallery()
{
				$id=$this->input->get('id');
				$result['data']=$id;

				$this->load->model('Ph4');
				$this->load->model('Service_M');
				$result['data']=$this->Service_M->View_Services();
				$result['gallery']=$this->Service_M->View_gallery();
				$result['gallerys']=$this->Ph4->gallery_views($id);


				$this->load->view('Static/Gallery',$result);

				}

				public function Gallery2()
				{
				$id=$this->input->get('id');
				$result['data']=$id;

				$this->load->model('Ph4');
				$result['gallery']=$this->Ph4->gallery($id);


				$this->load->view('Static/Gallery2',$result);

}

public function Videos2()
{
				$id=$this->input->get('id');
				$result['data']=$id;

				$this->load->model('Ph4');
				$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$result['Video']=$this->Ph4->videos($id);


				$this->load->view('Static/Videos2',$result);

}

public function Package_Details()
{
				$id=$this->input->get('id');
				$result['data']=$id;

				$this->load->model('Ph4');
				$data=$this->Ph4->get_details($id);
				foreach ($data as $row) {
				$vid=$row->veneu;
				$cid=$row->catering;
				$did=$row->decoration;
				$pid=$row->photographer;
				}

				$result['veneu']=$this->Ph4->details($vid);
				$result['catering']=$this->Ph4->details($cid);
				$result['decoration']=$this->Ph4->details($did);
				$result['photographer']=$this->Ph4->details($pid);
				$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();

				$result['product']=$this->Ph4->View_package_details($id);
				$result['product1']=$this->Ph4->View_package_detailss($id);

				$this->load->view('Static/Package_Details',$result);

}





public function pay()
{
				$this->load->model('Ev');
				$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$result['category']=$this->Ev->View_Event();
				$this->load->view('Static/pay',$result);

				}

				// public function OurServices()
				// 	{
				// 			$this->load->model('Ph');
				// 		$result['Service_data']=$this->Ph->View_Photo($id);

				// 		$this->load->view('Static/OurServices',$result);

// 	}





public function registration()
{
					$this->load->model('Ev');
					$result['category']=$this->Ev->View_Event();
					$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();

					$this->load->view('Static/register',$result);

					}



					public function Enquiry()
					{

					$this->load->model('Ev');
					$result['category']=$this->Ev->View_Event();
					$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();

					$this->load->view('Static/Enquiry',$result);

}


public function AddContact()
	{
		
		
              			$name=$this->input->post('name');
						$lastname=$this->input->post('lastname');
						$email=$this->input->post('email');
						$phone=$this->input->post('phone');
						$category=$this->input->post('category');
						$message=$this->input->post('message');
						$sub=$this->input->post('sub');


						$this->load->model('Cont');
						$this->Cont->AddContact($name,$lastname,$email,$phone,$category,$message);

		
		$this->load->model('Cont');
		$this->Cont->AddContact($name,$lastname,$email,$phone,$category,$message);
              

	}



              public function Find()
					{

					$category=$this->input->post('category');
					$location=$this->input->post('location');
					$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();

					$this->load->model('Service_M');
					$result['category']=$this->Service_M->Find($category,$location);
					$result['service']	= $category;
					$result['location']	= $location;
					// foreach($result['category'] as $row)
					// {
					// 	echo $row->titl$result['category']e;
					// }

					$this->load->view('Static/find',$result);

}

              public function Find2()
					{

					$service=$this->input->post('service');
					$location=$this->input->post('location');
					$price_min=$this->input->post('price_min');
					$price_max=$this->input->post('price_max');
					$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();

					$this->load->model('Service_M');
					$result['category']=$this->Service_M->Find2($service,$location,$price_max,$price_min);
					$result['service']	= $category;
					$result['location']	= $location;
					// foreach($result['category'] as $row)
					// {
					// 	echo $row->titl$result['category']e;
					// }

					$this->load->view('Static/find',$result);

}


public function wed()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed',$result);

}

public function wed1()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed1',$result);

}

public function wed2()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed2',$result);

}

public function wed3()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed3',$result);

}

public function wed4()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed4',$result);

}

public function wed5()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed5',$result);

}

public function wed6()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed6',$result);

}

public function wed7()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed7',$result);

}

public function wed8()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed8',$result);

}

public function wed9()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed9',$result);

}

public function wed10()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed10',$result);

}

public function wed11()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed11',$result);

}

public function wed12()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed12',$result);

}

public function wed13()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed13',$result);

}

public function wed14()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed14',$result);

}

public function wed15()
				{
$this->load->model('Service_M');
$result['data']=$this->Service_M->View_Services();
$result['gallery']=$this->Service_M->View_gallery();
				$this->load->view('Static/wed15',$result);

}

}