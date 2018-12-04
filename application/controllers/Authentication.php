<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Authentication_model');
	}

	public function index()
	{
		if (isset($this->session->loggedin))
		{ 
			echo "<br><pre>Data:-";
			print_r($_COOKIE);
			echo "</pre>";
			echo "<br><pre>_SESSION:-";
			print_r($_SESSION);
			echo "</pre>";

		} else {
			echo "else";
				// $this->load->view('login');
		}
	}

	public function login()
	{
		if (user_logged_in()) {
			redirect('authentication/home','refresh');
		}else {
			$this->load->view('authentication/login');
		}
	}

	public function dologin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_login_check');
		if ($this->form_validation->run() == FALSE) {
			echo json_encode(['status' => 0, 'error' => validation_errors()]);
		} else {
			$data['username'] = $this->input->post('username');
			$result = $this->Authentication->read_user($data);
			unset($result['token']);
			unset($result['dateCreated']);
			if ($this->input->post('remember')) {
				$info = base64_encode(implode(':', $result));
				$carray = array(
					'name' =>'user',
					'value' => $info,
					'expire' => '3600',
					'path'   => '/');
				set_cookie($carray,TRUE);
			}
			unset($result['password']);
			$result['loggedin'] = 1;
			$this->session->set_userdata( $result );
			echo json_encode(['status' => 1, 'error' => '']);
		}
	}
	public function login_check($password)
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$result = $this->Authentication->login_check($data);
		if ($result == TRUE) {
			return TRUE;
		} else {
			$this->form_validation->set_message('login_check','Wrong Username Or Password');
			return FALSE;
		}
	}

}
