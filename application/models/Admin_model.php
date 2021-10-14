<?php

class Admin_model extends CI_Model {


public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
}


public function login($username,$password)
	{
		$sql = $this->db->query("select * from user where username='".$username."' and password='".$password."'");
		$data = $sql->result_array();
		
		return $data;
	}

//Slideshow

public function getallslideshows()
{
	$sql = $this->db->query("select * from slideshow")->result_array();
	return $sql;

}


public function select_slideshow($id)
{
	$sql = $this->db->query("select * from slideshow where id_slide = '".$id."'");
	$data = $sql->result_array();
	return $data;

}

public function delete_slideshows($id)
{
	$sql = $this->db->query("delete from slideshow where id = '".$id."'");
	return $sql;

}

public function getalllink()
{
	$sql = $this->db->query("select * from link")->result_array();
	return $sql;

}

public function select_link($id)
{
	$sql = $this->db->query("select * from link where id_link = '".$id."'");
	$data = $sql->result_array();
	return $data;

}

public function getallnews()
{
	$sql = $this->db->query("select * from news")->result_array();
	return $sql;

}


public function insert_news(){

	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/news/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/backend/upload/news/');
		$konfigurasi = array(
			'allowed_types' => 'jpg|jpeg|png|bmp|JPG',
			'upload_path' => $tujuan_file,
			'remove_spaces' => true,
			'file_name' => $foto,
		);

		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'foto' => $url,
			'created_at' => date("Y-m-d H:i:s"),
		);
		$this->db->insert('news', $data);

	} else {

	
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'created_at' => date("Y-m-d H:i:s"),
		);
		$this->db->insert('news', $data);

	}
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	News berhasil ditambahkan !</div>');
	redirect('admin/news');

}


public function select_news($id)
{
	$sql = $this->db->query("select * from news where id_news = '".$id."'");
	$data = $sql->result_array();
	return $data;

}


public function edit_news(){

	$id = $this->input->post('id_news');
	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/news/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/backend/upload/news/');
		$konfigurasi = array(
			'allowed_types' => 'jpg|jpeg|png|bmp|JPG',
			'upload_path' => $tujuan_file,
			'remove_spaces' => true,
			'file_name' => $foto,
		);

		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'foto' => $url,
			'created_at' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id_news',$id);
		$this->db->update('news', $data);

	} else {

	
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'created_at' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id_news',$id);
		$this->db->update('news', $data);

	}
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	News berhasil diubah !</div>');
	redirect('admin/news');


}




public function select_sejarah()
{
	$sql = $this->db->query("select * from aboutus where id = '1'");
	$data = $sql->result_array();
	return $data;

}


public function select_vm()
{
	$sql = $this->db->query("select * from aboutus where id = '2'");
	$data = $sql->result_array();
	return $data;

}

public function select_privasi()
{
	$sql = $this->db->query("select * from aboutus where id = '3'");
	$data = $sql->result_array();
	return $data;

}


public function getallcontact()
{
	$sql = $this->db->query("select * from contact ");
	$data = $sql->result_array();
	return $data;

}


public function getallgallery()
{
	$sql = $this->db->query("select * from gallery ");
	$data = $sql->result_array();
	return $data;

}



public function getalltestimoni()
{
	$sql = $this->db->query("select * from testimonial ");
	$data = $sql->result_array();
	return $data;

}


public function select_biaya()
{
	$sql = $this->db->query("select * from akademik where id = '1'");
	$data = $sql->result_array();
	return $data;

}


public function select_animo()
{
	$sql = $this->db->query("select * from akademik where id = '3'");
	$data = $sql->result_array();
	return $data;

}

public function select_jadwal()
{
	$sql = $this->db->query("select * from akademik where id = '2'");
	$data = $sql->result_array();
	return $data;

}


} ?>
