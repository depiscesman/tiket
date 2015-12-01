<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	function index()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$data=array( 'title' => 'Login');
		 if ($this->form_validation->run() === TRUE)
		  {
					
					if(isset($_POST['submit']))
					{
						$data=array(
								'username' => $this->input->post('username'),
								'password' => do_hash($this->input->post('password'),'md5')
								);
					
						$hasil = $this->m_user->login($data);
			 
						if($hasil->num_rows()==1)
						{
							foreach ($hasil->result() as $h) 
							{
								$sess_data['username']=$h->username;
								$sess_data['gambar']=$h->gambar;
								$sess_data['status']=$h->status;
								$this->session->set_userdata($sess_data);
							}
							
							$this->session->set_userdata(array('status_login'=>'oke','username'=>$sess_data['username']));
							if($this->session->userdata('status')=='admin')
							{
								redirect('admin/dashboard');
							}
							elseif($this->session->userdata('status')=='user')
							{
								redirect('user/dashboard');
							}
							
						}
						else
						{
							redirect('auth/login/login/salah',$data);
						}
					}
			}
		else
		{
			chek_session_login();
			$this->load->view('auth/login',$data);
		}		
	}
	// function login()
	// {	
	// 	chek_session_login();
	// 	$this->template->load('auth/login','auth/login');
	// }
	function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');

	}
}