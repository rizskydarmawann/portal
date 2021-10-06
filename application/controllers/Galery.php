<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	public function index()
	{
		$this->load->view('galery');
	}
}
