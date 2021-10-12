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


} ?>
