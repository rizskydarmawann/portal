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

public function delete_link($id){

	$sql = $this->db->query("delete from link where id_link = '".$id."' ");
	return $sql;
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
			'modify' => $this->session->userdata('nama_panjang'),
			'created_at' => date("Y-m-d"),
		);
		$this->db->insert('news', $data);

	} else {

	
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'created_at' => date("Y-m-d"),
		);
		$this->db->insert('news', $data);

	}


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
			'modify' =>  $this->session->userdata('nama_panjang'),
			'created_at' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id_news',$id);
		$this->db->update('news', $data);

	} else {

	
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'modify' =>  $this->session->userdata('nama_panjang'),
			'created_at' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id_news',$id);
		$this->db->update('news', $data);

	}
	


}

public function delete_news($id){

	$sql = $this->db->query("delete from news where id_news = '".$id."' ");
	return $sql;
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




public function insert_gallery(){

	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/gallery/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/backend/upload/gallery/');
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
			'foto' => $url,
		);
		$this->db->insert('gallery', $data);

	} else {

	
		$data = array(
			'title' => $this->input->post('title'),
		);
		$this->db->insert('gallery', $data);

	}
	
}


public function select_gallery($id)
{
	$sql = $this->db->query("select * from gallery where id = '".$id."'");
	$data = $sql->result_array();
	return $data;

}


public function edit_gallery(){

	$id = $this->input->post('id');
	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/gallery/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/backend/upload/gallery/');
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
			'foto' => $url,
		);

		$this->db->where('id',$id);
		$this->db->update('gallery', $data);

	} else {

	
		$data = array(
			'title' => $this->input->post('title'),
		);

		$this->db->where('id',$id);
		$this->db->update('gallery', $data);

	}


}

public function delete_gallery($id){

	$sql = $this->db->query("delete from gallery where id = '".$id."' ");
	return $sql;
}



public function getalltestimoni()
{
	$sql = $this->db->query("select * from testimonial ");
	$data = $sql->result_array();
	return $data;

}

public function insert_testimoni(){

	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/testimoni/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/backend/upload/testimoni/');
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
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('description'),
			'foto' => $url,
		);
		$this->db->insert('testimonial', $data);

	} else {

	
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('description'),
		);
		$this->db->insert('testimonial', $data);

	}
	
}

// public function insert_testimoni(){

// 	$data = array(
// 		'name' => $this->input->post('name'),
// 		'email' => $this->input->post('email'),
// 		'description' => $this->input->post('description')
// 	);

// 	$this->db->insert('testimonial', $data);
// }


public function select_testimoni($id)
{
	$sql = $this->db->query("select * from testimonial where id = '".$id."'");
	$data = $sql->result_array();
	return $data;

}

public function edit_testimoni(){

	$id = $this->input->post('id');
	$foto = str_replace(" ", "_", $_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/testimoni/' . $foto);
	if (!empty($foto)) {
		$tujuan_file = realpath(APPPATH . '../assets/backend/upload/testimoni/');
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
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('description'),
			'foto' => $url,
			
		);

		$this->db->where('id',$id);
		$this->db->update('testimonial', $data);

	} else {

	
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('description'),
			
		);

		$this->db->where('id_news',$id);
		$this->db->update('news', $data);

	}
	


}

public function delete_testimoni($id){

	$sql = $this->db->query("delete from testimonial where id = '".$id."' ");
	return $sql;
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


public function proses_edit_vm(){

	$data = array(
		'description' => $this->input->post('description')
	);

	$this->db->where('id',2);
	$this->db->update('aboutus', $data);

}


public function proses_edit_sejarah(){

	$data = array(
		'description' => $this->input->post('description')
	);

	$this->db->where('id',1);
	$this->db->update('aboutus', $data);

}




public function proses_edit_privasi(){

	$data = array(
		'description' => $this->input->post('description')
	);

	$this->db->where('id',3);
	$this->db->update('aboutus', $data);

}




public function proses_edit_biaya(){

	$data = array(
		'description' => $this->input->post('description')
	);

	$this->db->where('id',1);
	$this->db->update('akademik', $data);

}



public function proses_edit_animo(){

	$data = array(
		'description' => $this->input->post('description')
	);

	$this->db->where('id',3);
	$this->db->update('akademik', $data);

}



public function proses_edit_jadwal(){

	$data = array(
		'description' => $this->input->post('description')
	);

	$this->db->where('id',2);
	$this->db->update('akademik', $data);

}

public function post_kontak(){


	$data = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'subject' => $this->input->post('subject'),
		'message' => $this->input->post('message'),
	);

	$this->db->insert('contact', $data);

}

public function delete_kontak($id){

	$sql = $this->db->query("delete from contact where id = '".$id."' ");
	return $sql;
}



} ?>
