<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vm extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['vm'] = $this->admin_model->select_vm();
		$data['feature'] = $this->admin_model->getallfeature();
		$data['connected'] = $this->admin_model->getallconnected();
		$data['location'] = $this->admin_model->getalllocation();
		$this->load->view('vm',$data);
	}
}
