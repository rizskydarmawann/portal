<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailberita extends CI_Controller {

	public function show()
	{
		$id = $this->uri->segment(3);
		$this->load->model('admin_model');
		$data['news'] = $this->admin_model->select_news($id);
		// $time = ($data['news'][0]['created_at']);
		// $set =str_replace("-","",$time);
		// var_dump($set);
		$this->db->query("update news  set hit = hit+1 where id_news = '".$id."'");
		$this->load->view('detailberita',$data);
	}
}
