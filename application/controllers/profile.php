<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	
	public function index()
	{
    $result= $this->db->get('products',12,20);
   
    $data=array('consulta'=>$result);

     $this->load->view('profile',$data);



	}

  


 
}
