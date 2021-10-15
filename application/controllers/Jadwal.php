<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['jadwal'] = $this->admin_model->select_jadwal();
		$this->load->view('jadwal',$data);
	}
}
