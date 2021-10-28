<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animo extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['animo'] = $this->admin_model->select_animo();
		$this->load->view('animo',$data);
	}
}
