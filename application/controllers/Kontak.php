<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model');
		$data['feature'] = $this->admin_model->getallfeature();
		$data['connected'] = $this->admin_model->getallconnected();
		$data['location'] = $this->admin_model->getalllocation();
		$this->load->view('kontak',$data);
	}


	public function post(){


		$this->load->model('Admin_model','kontak');
		$this->kontak->post_kontak();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesan berhasil dikirim !</div>');
        redirect('kontak');



	}
}
