<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vm extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['vm'] = $this->admin_model->select_vm();
		$this->load->view('vm',$data);
	}
}
