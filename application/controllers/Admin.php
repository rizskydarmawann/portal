<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'file'));
        $this->load->model('admin_model');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function proses_login()
    {
        $this->load->library('session');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('Admin_model', 'proses_login');
        $data['log'] = $this->proses_login->login($username, $password);
        $cek = count($data['log']);
        if ($cek > 0) {
            $newdata = array(
                'id_user' => $data['log'][0]['id_user'],
                'username' => $data['log'][0]['username'],
                'email' => $data['log'][0]['email'],
                'status' => $data['log'][0]['status'],
            );
            $this->session->set_userdata($newdata);
            redirect(base_url() . 'admin/dashboard');
        } else {
            echo "<h3 align='center'>Ulangi Login</h3>";
        }

    }

    public function dashboard()
    {
        $data = array();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/home/dashboard');
        $this->load->view('admin/themes/footer');
    }

    public function slideshow()
    {

        $data['title'] = 'Slide Show';

        $data['slide'] = $this->admin_model->getallslideshows();
		// var_dump( $data['slide']);
        $this->load->view('admin/themes/header');
        $this->load->view('admin/home/slideshow', $data);
        $this->load->view('admin/themes/footer');
    }

    public function tambah_slide()
    {
        $data['title'] = 'Tambah Slide Show';
        $this->load->view('admin/themes/header');
        $this->load->view('admin/home/tambah_slide', $data);
        $this->load->view('admin/themes/footer');
    }

    public function proses_add_slideshows()
    {

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Tambah Slide Show';
            $this->load->view('admin/themes/header');
            $this->load->view('admin/home/tambah_slide', $data);
            $this->load->view('admin/themes/footer');
        } else {
            $foto = str_replace(" ", "_", $_FILES['foto']['name']);
            $url = base_url('assets/backend/upload/slider/' . $foto);
            if (!empty($foto)) {
                $tujuan_file = realpath(APPPATH . '../assets/backend/upload/slider/');
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
                    'judul' => $this->input->post('judul'),
                    'foto' => $url,
                    'created_at' => date("Y-m-d H:i:s"),
                );
                $this->db->insert('slideshow', $data);

            } else {

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'created_at' => date("Y-m-d H:i:s"),
                );
                $this->db->insert('slideshow', $data);

            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Slideshow berhasil ditambahkan !</div>');
            redirect('admin/slideshow');
        }

    }

    public function edit_slideshow($id_slide)
    {
		$data['slider'] = $this->admin_model->select_slideshow($id_slide);
		// var_dump($data['slider']);
		$data['title'] = 'Edit Slide Show';
            $this->load->view('admin/themes/header');
            $this->load->view('admin/home/edit_slide', $data);
            $this->load->view('admin/themes/footer');
    }


    public function proses_edit_slideshows(){
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');

            if ($this->form_validation->run() == false) {

                $data['title'] = 'Edit Slide Show';
                $this->load->view('admin/themes/header');
                $this->load->view('admin/home/edit_slide', $data);
                $this->load->view('admin/themes/footer');
            } else {

                $id = $this->input->post('id_slide');
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
                        'judul' => $this->input->post('judul'),
                        'foto' => $url,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $this->db->where('id_slide',$id);
                    $this->db->update('slideshow',$data);
                }else{
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $this->db->where('id_slide',$id);
                    $this->db->update('slideshow',$data);
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Slideshow berhasil diubah !</div>');
                redirect('admin/slideshow');
            }
    }

    public function link()
    {

        $data['title'] = 'Link';

        $data['link'] = $this->admin_model->getalllink();
		// var_dump( $data['slide']);
        $this->load->view('admin/themes/header');
        $this->load->view('admin/home/link', $data);
        $this->load->view('admin/themes/footer');
    }

    public function tambah_link()
    {
        $data['title'] = 'Tambah Link';
        $this->load->view('admin/themes/header');
        $this->load->view('admin/home/tambah_link', $data);
        $this->load->view('admin/themes/footer');
    }

    public function proses_add_link()
    {

        $this->form_validation->set_rules('url', 'Url', 'required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Tambah Link';
            $this->load->view('admin/themes/header');
            $this->load->view('admin/home/tambah_link', $data);
            $this->load->view('admin/themes/footer');
        } else {
            $foto = str_replace(" ", "_", $_FILES['foto_link']['name']);
            $url = base_url('assets/backend/upload/link/' . $foto);
            if (!empty($foto)) {
                $tujuan_file = realpath(APPPATH . '../assets/backend/upload/link/');
                $konfigurasi = array(
                    'allowed_types' => 'jpg|jpeg|png|bmp|JPG',
                    'upload_path' => $tujuan_file,
                    'remove_spaces' => true,
                    'file_name' => $foto,
                );

                $this->load->library('upload', $konfigurasi);
                $this->upload->do_upload('foto_link');
                $this->upload->data();

                $data = array(
                    'url' => $this->input->post('url'),
                    'foto_link' => $url,
                    'created_at' => date("Y-m-d H:i:s"),
                );
                $this->db->insert('link', $data);

            } else {

                $data = array(
                    'url' => $this->input->post('url'),
                    'created_at' => date("Y-m-d H:i:s"),
                );
                $this->db->insert('link', $data);

            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Link berhasil ditambahkan !</div>');
            redirect('admin/link');
        }

    }

    public function edit_link($id_link)
    {
		$data['link'] = $this->admin_model->select_link($id_link);
		// var_dump($data['slider']);
		$data['title'] = 'Edit Link';
            $this->load->view('admin/themes/header');
            $this->load->view('admin/home/edit_link', $data);
            $this->load->view('admin/themes/footer');
    }


    public function proses_edit_link(){
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

            if ($this->form_validation->run() == false) {

                $data['title'] = 'Edit Link';
                $this->load->view('admin/themes/header');
                $this->load->view('admin/home/edit_link', $data);
                $this->load->view('admin/themes/footer');
            } else {

                $id = $this->input->post('id_link');
                $foto = str_replace(" ","_",$_FILES['foto_link']['name']);
                $url = base_url('assets/backend/upload/link/'.$foto);
                if(!empty($foto)) {
                    $tujuan_file = realpath(APPPATH.'../assets/backend/upload/link/');
                    $konfigurasi = array(
                        'allowed_types'	=> 'jpg|jpeg|png|bmp|JPG',
                        'upload_path'	=> $tujuan_file,
                        'remove_spaces'	=> TRUE,
                        'file_name' => $foto
                    );
            
                    $this->load->library('upload',$konfigurasi);
                    $this->upload->do_upload('foto_link');
                    $this->upload->data();
            
                    $data = array(
                        'url' => $this->input->post('url'),
                        'foto_link' => $url,
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $this->db->where('id_link',$id);
                    $this->db->update('link',$data);
                }else{
                    $data = array(
                        'judul' => $this->input->post('judul'),
                        'created_at' => date("Y-m-d H:i:s"),
                    );
                    $this->db->where('id_link',$id);
                    $this->db->update('link',$data);
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Link berhasil diubah !</div>');
                redirect('admin/link');
            }
    }


    
    public function news()
    {

        $data['title'] = 'News';
        $this->load->model('Admin_model', 'news');
        $data['news'] = $this->news->getallnews();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/news/content',$data);
        $this->load->view('admin/themes/footer');
    }


    
    public function add_news()
    {

        $data['title'] = 'Add News';
        $this->load->view('admin/themes/header');
        $this->load->view('admin/news/add',$data);
        $this->load->view('admin/themes/footer');
    }


    

	public function proses_add_news() {

	
		$this->load->model('Admin_model','news');
		$this->news->insert_news();
		redirect(base_url('admin/news'));
	}


    
    public function edit_news()
    {
        $data['title'] = 'Edit News';
        $id = $this->uri->segment(3);
        $this->load->model('Admin_model','news');
		$data['news'] = $this->news->select_news($id);
        $this->load->view('admin/themes/header');
        $this->load->view('admin/news/edit',$data);
        $this->load->view('admin/themes/footer');
    }

    
    

	public function proses_edit_news() {

	
		$this->load->model('Admin_model','news');
		$this->news->edit_news();
		redirect(base_url('admin/news'));
	}



    
public function edit_sejarah()
{
    $data['title'] = 'Edit Sejarah';
    $this->load->model('Admin_model','sejarah');
    $data['sejarah'] = $this->sejarah->select_sejarah();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/tentangkami/sejarah',$data);
    $this->load->view('admin/themes/footer');
}




public function edit_vm()
{
    $data['title'] = 'Edit Visi Misi';
    $this->load->model('Admin_model','vm');
    $data['vm'] = $this->vm->select_vm();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/tentangkami/vm',$data);
    $this->load->view('admin/themes/footer');
}


public function edit_privasi()
{
    $data['title'] = 'Edit Privasi';
    $this->load->model('Admin_model','privasi');
    $data['privasi'] = $this->privasi->select_privasi();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/tentangkami/privasi',$data);
    $this->load->view('admin/themes/footer');
}




    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }

    
    
    public function kontak()
    {

        $data['title'] = 'Kontak';
        $this->load->model('Admin_model', 'kontak');
        $data['kontak'] = $this->kontak->getallcontact();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/kontak/content',$data);
        $this->load->view('admin/themes/footer');
    }


    public function gallery()
    {

        $data['title'] = 'Gallery';
        $this->load->model('Admin_model', 'gallery');
        $data['gallery'] = $this->gallery->getallgallery();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/gallery/content',$data);
        $this->load->view('admin/themes/footer');
    }


    public function testimoni()
    {

        $data['title'] = 'Testimoni';
        $this->load->model('Admin_model', 'testimoni');
        $data['testimoni'] = $this->testimoni->getalltestimoni();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/testimoni/content',$data);
        $this->load->view('admin/themes/footer');
    }

}
