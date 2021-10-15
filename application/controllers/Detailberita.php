<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailberita extends CI_Controller {

	public function show()
	{
		$id = $this->uri->segment(3);
		$this->load->model('admin_model');
		$data['news'] = $this->admin_model->select_news($id);
		$this->load->view('detailberita',$data);
	}
}
