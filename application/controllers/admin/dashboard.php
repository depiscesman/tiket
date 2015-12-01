<?php 
/**
* 
*/

class Dashboard extends CI_Controller
{	
	function index()
	{
		$data=array( 'title' => 'Dashbord');
		
		chek_session();
		$this->template->load('home','admin/menu',$data);
		//$this->template->load('admin/dashboard','admin/dashboard');
	}
}