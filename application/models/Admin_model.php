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


public function proses_add_slideshows(){

	$foto = str_replace(" ","_",$_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/slider/'.$foto);
	if(!empty($foto)) {
		$tujuan_file = realpath(APPPATH.'../assets/backend/upload/slider/');
		$konfigurasi = array(
			'allowed_types'	=> 'jpg|jpeg|png|bmp|JPG',
			'upload_path'	=> $tujuan_file,
			'remove_spaces'	=> TRUE,
			'file_name' => $foto
		);

		$this->load->library('upload',$konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'title'=>$this->input->post('title'),
			'foto'=>$url,
			'description'=>$this->input->post('description'),
			'link'=>$this->input->post('link'),
			'publish'=>$this->input->post('publish')
		);
		$this->db->insert('slideshow',$data);

	}else{

		$data = array(
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'link'=>$this->input->post('link'),
			'publish'=>$this->input->post('publish')
		);
		$this->db->insert('slideshow',$data);

	}

}

public function proses_edit_slideshows(){
	$id = $this->input->post('id');
	$foto = str_replace(" ","_",$_FILES['foto']['name']);
	$url = base_url('assets/backend/upload/slider/'.$foto);
	if(!empty($foto)) {
		$tujuan_file = realpath(APPPATH.'../assets/backend/upload/slider/');
		$konfigurasi = array(
			'allowed_types'	=> 'jpg|jpeg|png|bmp|JPG',
			'upload_path'	=> $tujuan_file,
			'remove_spaces'	=> TRUE,
			'file_name' => $foto
		);

		$this->load->library('upload',$konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'title'=>$this->input->post('title'),
			'foto'=>$url,
			'description'=>$this->input->post('description'),
			'link'=>$this->input->post('link'),
			'publish'=>$this->input->post('publish')
		);
		$this->db->where('id',$id);
		$this->db->update('slideshow',$data);
	}else{
		$data = array(
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'link'=>$this->input->post('link'),
			'publish'=>$this->input->post('publish')
		);
		$this->db->where('id',$id);
		$this->db->update('slideshow',$data);
	}
}

public function select_slideshow($id)
{
	$sql = $this->db->query("select * from slideshow where id = '".$id."'");
	$data = $sql->result_array();
	return $data;

}

public function delete_slideshows($id)
{
	$sql = $this->db->query("delete from slideshow where id = '".$id."'");
	return $sql;

}


} ?>
