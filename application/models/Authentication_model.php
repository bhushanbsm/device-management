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

	public function get_roles()
	{
		return $this->db->where('role_id >',$this->session->account)->get('roles')->result_array();
	}

	public function write_user($data='')
	{
		if($this->db->insert('users',$data)){
			return $this->db->insert_id();
		}
		return 0;
	}

}
