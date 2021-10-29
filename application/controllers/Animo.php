<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animo extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['animo'] = $this->admin_model->select_animo();
		$data['feature'] = $this->admin_model->getallfeature();
		$data['connected'] = $this->admin_model->getallconnected();
		$data['location'] = $this->admin_model->getalllocation();
		$this->load->view('animo',$data);
	}
}
