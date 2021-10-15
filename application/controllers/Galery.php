<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	public function index()
	{

		$this->load->model('admin_model');
		$data['gallery'] = $this->admin_model->getallgallery();
		$this->load->view('galery',$data);
	}
}
