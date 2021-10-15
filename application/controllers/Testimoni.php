<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['testimoni'] = $this->admin_model->getalltestimoni();
		$this->load->view('testimoni',$data);
	}
}
