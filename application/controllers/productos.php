<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos extends CI_Controller {

	
	public function index()
	{
  
 $result= $this->db->get('products');
   
    $data=array('consulta'=>$result);
  
     $this->load->view('productos',$data);



	}

  


 
}