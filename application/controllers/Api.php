<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function show()
	{
		$this->load->model('admin_model');
		$data = $this->admin_model->getfooter();
		echo json_encode($data);
	}
}
