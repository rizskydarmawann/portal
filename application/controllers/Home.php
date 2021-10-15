<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	

	public function index()
	{
		$this->load->model('admin_model');
		$data['slide'] = $this->admin_model->getallslideshows();
		$data['link'] = $this->admin_model->getalllink();
		$data['news'] = $this->admin_model->getallnews();
		$data['gallery'] = $this->admin_model->getallgallery();
		$this->load->view('home', $data);
	}
}
