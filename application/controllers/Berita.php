<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['news'] = $this->admin_model->getallnews();
		$this->load->view('berita',$data);
	}
}
