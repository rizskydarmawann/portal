<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
  public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
		$this->load->model('admin_model');
  }

	public function index()
	{
		$this->load->view('admin/login');
	}
	
	
  public function proses_login() {
	  $this->load->library('session');
	  $username = $this->input->post('username');
	  $password = $this->input->post('password');
	  $this->load->model('Admin_model','proses_login');
	  $data['log'] = $this->proses_login->login($username,$password);
	  $cek = count($data['log']);
	  if($cek > 0) {
		  $newdata = array(
			  'id_user'=> $data['log'][0]['id_user'],
			  'username' => $data['log'][0]['username'],
			  'email' => $data['log'][0]['email'],
			  'status' => $data['log'][0]['status']
		  );
		  $this->session->set_userdata($newdata);
		  redirect(base_url().'admin/dashboard');
	  } else {
		  echo"<h3 align='center'>Ulangi Login</h3>";
	  }

  }
    
  public function dashboard() {
	$data = array();	
	$this->load->view('admin/themes/header');
	$this->load->view('admin/home/dashboard');
	$this->load->view('admin/themes/footer');
  }

  public function slideshow() {
	
	$data['title'] ='Slide Show';
	
	$data['slide'] = $this->admin_model->getallslideshows();
	

	$this->load->view('admin/themes/header');
	$this->load->view('admin//home/slideshow', $data);
	$this->load->view('admin/themes/footer');
  }

  public function tambah()
  {
	$data['title'] ='Tambah Slide Show';
	$this->load->view('admin/themes/header');
	$this->load->view('admin//home/tambah', $data);
	$this->load->view('admin/themes/footer');
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
			'judul'=>$this->input->post('judul'),
			'foto'=>$url,	
			'created_at'=>date("Y-m-d H:i:s")
		);
		$this->db->insert('slideshow',$data);

	}else{

		$data = array(
			'judul'=>$this->input->post('judul'),
			'created_at'=>date("Y-m-d H:i:s")		
		);
		$this->db->insert('slideshow',$data);

	}
	redirect('slideshow');

}
  
  public function logout ()
	{
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}


	

	
}
