<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['news'] = $this->admin_model->getallnews();
		$data['feature'] = $this->admin_model->getallfeature();
		$data['connected'] = $this->admin_model->getallconnected();
		$data['location'] = $this->admin_model->getalllocation();
		$this->load->view('berita',$data);
	}
}
