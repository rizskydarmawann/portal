<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animo extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['animo'] = $this->admin_model->select_animo();
		$data['future'] = $this->admin_model->getfuture();
		$data['connected'] = $this->admin_model->getconnect();
		$data['map'] = $this->admin_model->getmap();
		$this->load->view('animo',$data);
	}
}
