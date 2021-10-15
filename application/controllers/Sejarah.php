<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['sejarah'] = $this->admin_model->select_sejarah();
		$this->load->view('sejarah',$data);
	}
}
