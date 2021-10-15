<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$this->load->view('kontak');
	}


	public function post(){


		$this->load->model('Admin_model','kontak');
		$this->kontak->post_kontak();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesan berhasil dikirim !</div>');
        redirect('kontak');



	}
}
