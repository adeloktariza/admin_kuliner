<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url')); 
		$this->load->library('session');
		$this->load->model('m_user');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function prosesLogin()
	{
		$username = $this->input->post('fusername');
        $password = $this->input->post('fuserpassword');
        $data = $this->m_user->user_login($username,$password)->result();
        print_r($data);
        	if($data == TRUE){
        		$this->session->set_userdata('fusername',$username);
        		redirect('main/dashboard');
        	}
        	else{
        		redirect('login');
        	}
	}
}
