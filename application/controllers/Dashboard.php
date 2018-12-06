<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Device_list');
		if (!user_logged_in()) {
			redirect('login','refresh');
		}
		$this->user = $this->Device_list->read_user(['uid'=>$this->session->uid]);
	}

	public function index($value='')
	{
		$data['all_device_types'] = $this->Device_list->all_device_types();
		$data['all_sites'] = $this->Device_list->all_sites();
		$data['user'] = $this->user;
		$this->load->view('dashboard', $data);
	}

	public function search_by_site()
	{
		$all_sites = $this->Device_list->all_sites();
		$site_id = 0;
		$data['all_sites'] = [];
		foreach ($all_sites as $key => $site) {
			$data['all_sites'] += [$site['site_id'] => $site['site_name']];
			$site_id = $site['site_id'];
		}
		$site_id = $this->input->post('site') ? $this->input->post('site') : $site_id;
		$data['from'] = $this->input->post('from') ? $this->input->post('from') : "0000-00-00";
		$data['to'] = $this->input->post('to') ? $this->input->post('to') : date("Y-m-d");
		$data['devices'] = $this->Device_list->search_by_site($site_id,$data['from'],$data['to']);
		$data['site_id'] = $site_id;
		$data['user'] = $this->user;
		$this->load->view('search_by_site', $data);
	}

	public function search_by_device()
	{
		$all_device_types = $this->Device_list->all_device_types();
		$device_id = 0;
		$data['all_device_types'] = [];
		foreach ($all_device_types as $key => $device) {
			$data['all_device_types'] += [$device['device_id'] => $device['types']];
			$device_id = $device['device_id'];
		}
		$device_id = $this->input->post('device') ? $this->input->post('device') : $device_id;
		$data['from'] = $this->input->post('from') ? $this->input->post('from') : "0000-00-00";
		$data['to'] = $this->input->post('to') ? $this->input->post('to') : date("Y-m-d");
		$data['search_by_device'] = $this->Device_list->search_by_device($device_id,$data['from'],$data['to']);
		$data['device_id'] = $device_id;
		$data['user'] = $this->user;
		$this->load->view('search_by_device', $data);
	}

	public function search_by_implementor()
	{
		$all_implementor = $this->Device_list->all_implementor();
		$implementor_id = 0;
		$data['all_implementor'] = [];
		foreach ($all_implementor as $key => $implementor) {
			$data['all_implementor'] += [$implementor['uid'] => $implementor['fname']." ".$implementor['lname']];
			$implementor_id = $implementor['uid'];
		}
		$implementor_id = $this->input->post('implementor') ? $this->input->post('implementor') : $implementor_id;
		$data['from'] = $this->input->post('from') ? $this->input->post('from') : "0000-00-00";
		$data['to'] = $this->input->post('to') ? $this->input->post('to') : date("Y-m-d");
		$data['search_by_implementor'] = $this->Device_list->search_by_implementor($implementor_id,$data['from'],$data['to']);
		$data['implementor_id'] = $implementor_id;
		$data['user'] = $this->user;
		$this->load->view('search_by_implementor', $data);
	}


}
