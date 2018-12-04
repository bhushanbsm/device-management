<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function login_check($data='')
	{
		if($this->db->get_where('users',$data)->num_rows() > 0) {
			return true;
		}
		return false;
	}

	public function read_user($data='')
	{
		return $this->db->get_where('users',$data)->row_array();
	}

}
