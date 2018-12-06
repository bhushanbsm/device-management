<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_list extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function all_device_types()
	{
		return $this->db->order_by('device_id', 'ASC')
						->get('device_types')
						->result_array();
	}

	public function all_sites()
	{
		return $this->db->select('site.*, floar_plan.floar_id, floar_plan.floar_name, organization.name')
				->from('site')
				->join('floar_plan', 'floar_plan.site_id = site.site_id', 'LEFT')
				->join('organization', 'organization.org_id = site.org_id', 'LEFT')
				->get()
				->result_array();
	}

	public function search_by_site($site_id,$from,$to)
	{
		return $this->db->select('device_types.device_id, device_types.types,device_installed.dateInstalled, floar_plan.floar_name, users.fname, users.lname')
				->from('device_types')
				->join('device_installed', 'device_installed.device_id = device_types.device_id')
				->join('floar_plan', 'device_installed.site_id = floar_plan.site_id')
				->join('users', 'device_installed.uid = users.uid')
				->where('device_installed.site_id',$site_id)
				->where('users.account >',$this->session->account)
				->where('device_installed.dateInstalled >=',$from)
				->where('device_installed.dateInstalled <=',$to)
				->get()
				->result_array();
	}

	public function search_by_device($device_id,$from,$to)
	{
		return $this->db->select('site.*, device_installed.dateInstalled, floar_plan.floar_name, organization.name, users.fname, users.lname')
				->from('site')
				->join('device_installed', 'device_installed.site_id = site.site_id')
				->join('floar_plan', 'floar_plan.site_id = site.site_id')
				->join('organization', 'site.org_id = organization.org_id')
				->join('users', 'device_installed.uid = users.uid')
				->where('users.account >',$this->session->account)
				->where('device_installed.device_id',$device_id)
				->where('device_installed.dateInstalled >=',$from)
				->where('device_installed.dateInstalled <=',$to)
				->get()
				->result_array();
	}
	public function all_implementor()
	{
		return $this->db->where('account >',$this->session->account, FALSE)
						->order_by('uid', 'ASC')
						->get('users')
						->result_array();
	}

	public function search_by_implementor($implementor_id,$from,$to)
	{
		return $this->db->select('site.*, floar_plan.floar_name, organization.name, device_installed.dateInstalled')
				->from('site')
				->join('device_installed', 'device_installed.site_id = site.site_id')
				->join('floar_plan', 'floar_plan.site_id = site.site_id')
				->join('organization', 'site.org_id = organization.org_id')
				->join('users', 'device_installed.uid = users.uid')
				->where('users.account >',$this->session->account)
				->where('device_installed.uid',$implementor_id)
				->where('device_installed.dateInstalled >=',$from)
				->where('device_installed.dateInstalled <=',$to)
				->get()
				->result_array();
	}

	public function read_user($data='')
	{
		return $this->db->get_where('users',$data)->row_array();
	}
}
