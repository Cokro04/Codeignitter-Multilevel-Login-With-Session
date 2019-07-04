<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{ 
	if($this->session->userdata('level')==='3'){
		$data['title'] = 'Dashboard';//-----------------------------------------------------Dynamic Page Title 
		$this->load->view('couser/welcome_message',$data);
	}else{
          echo "Access Denied";
		  redirect('');
      }
		
	}
	
	
	
	
	
	
	
	
	
	
	function logout(){
      $this->session->sess_destroy();
      redirect('');
  }
}
