<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	public function index()
	{

		$this->load->model('admin_model');
		$data['gallery'] = $this->admin_model->getallgallery();
		$data['feature'] = $this->admin_model->getallfeature();
		$data['connected'] = $this->admin_model->getallconnected();
		$data['location'] = $this->admin_model->getalllocation();
		$this->load->view('galery',$data);
	}
}
