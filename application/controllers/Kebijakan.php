<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebijakan extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['privasi'] = $this->admin_model->select_privasi();
		$this->load->view('kebijakan',$data);
	}
}
