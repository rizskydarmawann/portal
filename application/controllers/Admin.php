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
                'nama_panjang' => $data['log'][0]['nama_panjang'],
                'foto' => $data['log'][0]['foto'],
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
        $this->load->model('Admin_model', 'summary');
        $data['pengunjung'] = $this->summary->getallsummary();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/home/dashboard',$data);
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

    public function delete_link()
    {

    $id = $this->uri->segment(3);
	$this->admin_model->delete_link($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Link berhasil dihapus !</div>');
    redirect(base_url('admin/link'));


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
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">News berhasil ditambahkan !</div>');
        redirect('admin/news');
       
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
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">News berhasil diubah !</div>');
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

public function delete_news()
{

$id = $this->uri->segment(3);
$this->admin_model->delete_news($id);
$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">News berhasil dihapus !</div>');
redirect(base_url('admin/news'));


}



public function proses_edit_sejarah(){

    $this->load->model('Admin_model','sejarah');
    $this->sejarah->proses_edit_sejarah();
    redirect(base_url('admin/edit_sejarah'));


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


public function proses_edit_vm(){

	    $this->load->model('Admin_model','vm');
		$this->vm->proses_edit_vm();
		redirect(base_url('admin/edit_vm'));


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


public function proses_edit_privasi(){

    $this->load->model('Admin_model','privasi');
    $this->privasi->proses_edit_privasi();
    redirect(base_url('admin/edit_privasi'));


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


    
    public function delete_kontak()
    {

    $id = $this->uri->segment(3);
    $this->load->model('Admin_model','kontak');
    $this->kontak->delete_kontak($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kontak berhasil dihapus !</div>');
    redirect(base_url('admin/kontak'));


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

    
    public function add_gallery()
    {

        $data['title'] = 'Add Gallery';
        $this->load->view('admin/themes/header');
        $this->load->view('admin/gallery/add',$data);
        $this->load->view('admin/themes/footer');
    }


    

	public function proses_add_gallery() {

		$this->load->model('Admin_model','gallery');
		$this->gallery->insert_gallery();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gallery berhasil ditambahkan !</div>');
            redirect('admin/gallery');

	}


    
    public function edit_gallery()
    {
        $data['title'] = 'Edit Gallery';
        $id = $this->uri->segment(3);
        $this->load->model('Admin_model','gallery');
		$data['gallery'] = $this->gallery->select_gallery($id);
        $this->load->view('admin/themes/header');
        $this->load->view('admin/gallery/edit',$data);
        $this->load->view('admin/themes/footer');
    }

    
    
    

	public function proses_edit_gallery() {

	
		$this->load->model('Admin_model','gallery');
		$this->gallery->edit_gallery();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Gallery berhasil diubah !</div>');
        redirect('admin/gallery');
	}

    public function delete_gallery()
    {

        $id = $this->uri->segment(3);
        $this->load->model('Admin_model','gallery');
		$this->gallery->delete_gallery($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gallery berhasil dihapus ! </div>');
        redirect('admin/gallery');
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


    
    public function add_testimoni()
    {

        $data['title'] = 'Add Testimonial';
        $this->load->view('admin/themes/header');
        $this->load->view('admin/testimoni/add',$data);
        $this->load->view('admin/themes/footer');
    }


    

	public function proses_add_testimoni() {

		$this->load->model('Admin_model','testimoni');
		$this->testimoni->insert_testimoni();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Testimoni berhasil ditambahkan !</div>');
        redirect('admin/testimoni');

	}

    public function edit_testimoni($id)
    {
		$data['testimoni'] = $this->admin_model->select_testimoni($id);
		// var_dump($data['testimoni']);
		$data['title'] = 'Edit Testimoni';
            $this->load->view('admin/themes/header');
            $this->load->view('admin/testimoni/edit', $data);
            $this->load->view('admin/themes/footer');
    }

    public function proses_edit_testimoni() {

	
		$this->load->model('Admin_model','testimoni');
		$this->testimoni->edit_testimoni();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Testimoni berhasil diubah !</div>');
        redirect('admin/testimoni/content');
	}




    public function delete_testimoni()
    {

        $id = $this->uri->segment(3);
        $this->load->model('Admin_model','testimoni');
		$this->testimoni->delete_testimoni($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Testimonial berhasil dihapus ! </div>');
        redirect('admin/testimoni');
    }


    public function animo()
    {
        $data['title'] = 'Animo dan Daya Tampung';
        $this->load->model('Admin_model','animo');
        $data['animo'] = $this->animo->select_animo();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/akademik/animo', $data);
        $this->load->view('admin/themes/footer');
    }


    
public function proses_edit_animo(){

    $this->load->model('Admin_model','animo');
    $this->animo->proses_edit_animo();
    redirect(base_url('admin/animo'));


}


    
    public function biaya()
    {
        $data['title'] = 'Biaya Pendidikan';
        $this->load->model('Admin_model','biaya');
        $data['biaya'] = $this->biaya->select_biaya();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/akademik/biaya', $data);
        $this->load->view('admin/themes/footer');
    }

    
       
public function proses_edit_biaya(){

    $this->load->model('Admin_model','biaya');
    $this->biaya->proses_edit_biaya();
    redirect(base_url('admin/biaya'));


}



    public function jadwal()
    {
        $data['title'] = 'Jadwal Pendaftaran';
        $this->load->model('Admin_model','jadwal');
        $data['jadwal'] = $this->jadwal->select_jadwal();
        $this->load->view('admin/themes/header');
        $this->load->view('admin/akademik/jadwal', $data);
        $this->load->view('admin/themes/footer');
    }

           
public function proses_edit_jadwal(){

    $this->load->model('Admin_model','jadwal');
    $this->jadwal->proses_edit_jadwal();
    redirect(base_url('admin/jadwal'));


}



public function user()
{
    $data['title'] = 'Pengguna Aplikasi';
    $this->load->model('Admin_model','user');
    $data['user'] = $this->user->getalluser();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/user/content', $data);
    $this->load->view('admin/themes/footer');
}


public function add_user()
{
    $data['title'] = 'Pengguna Aplikasi';
    $this->load->view('admin/themes/header');
    $this->load->view('admin/user/tambah_user', $data);
    $this->load->view('admin/themes/footer');
}



public function insert_user()
{
    $this->load->model('Admin_model','user');
    $this->user->save_user();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil di tambah ! </div>');
    redirect(base_url('admin/user'));

}




public function edit_user()
{
    $data['title'] = 'Pengguna Aplikasi';
    $id= $this->uri->segment(3);
    $this->load->model('Admin_model','user');
    $data['detail'] = $this->user->select_user($id);
    $this->load->view('admin/themes/header');
    $this->load->view('admin/user/edit_user', $data);
    $this->load->view('admin/themes/footer');
}



public function update_user()
{
    $this->load->model('Admin_model','user');
    $this->user->update_user();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil di Update ! </div>');
    redirect(base_url('admin/user'));

}




public function update_profile()
{
    $data['title'] = 'Profile Pengguna';
    $this->load->model('Admin_model','user');
    $data['user'] = $this->user->getprofile();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/user/profile', $data);
    $this->load->view('admin/themes/footer');
}




public function save_profile()
{
    $this->load->model('Admin_model','profile');
    $this->profile->save_profile();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile berhasil diupdate ! </div>');
    redirect(base_url('admin/update_profile'));

}






public function connected()
{
    $data['title'] = 'Connected';
    $this->load->model('Admin_model','connected');
    $data['connected'] = $this->connected->getallconnected();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/connected/content', $data);
    $this->load->view('admin/themes/footer');
}


public function edit_connected()
{
    $data['title'] = 'Edit Connected';
    $id = $this->uri->segment(3);
    $this->load->model('Admin_model','connected');
    $data['detail'] = $this->connected->getdetailconnected($id);
    $this->load->view('admin/themes/header');
    $this->load->view('admin/connected/edit', $data);
    $this->load->view('admin/themes/footer');
}



public function update_connected()
{
    $this->load->model('Admin_model','conn');
    $this->conn->update_connected();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Connected berhasil diupdate ! </div>');
    redirect(base_url('admin/connected'));

}

public function feature()
{
    $data['title'] = 'Feature';
    $this->load->model('Admin_model','feature');
    $data['feature'] = $this->feature->getallfeature();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/feature/content', $data);
    $this->load->view('admin/themes/footer');
}


public function edit_feature()
{
    $data['title'] = 'Edit Feature';
    $id = $this->uri->segment(3);
    $this->load->model('Admin_model','feature');
    $data['detail'] = $this->feature->getdetailfeature($id);
    $this->load->view('admin/themes/header');
    $this->load->view('admin/feature/edit', $data);
    $this->load->view('admin/themes/footer');
}



public function update_feature()
{
    $this->load->model('Admin_model','feature');
    $this->feature->update_feature();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Feature berhasil diupdate ! </div>');
    redirect(base_url('admin/feature'));

}

public function location()
{
    $data['title'] = 'Location';
    $this->load->model('Admin_model','location');
    $data['location'] = $this->location->getalllocation();
    $this->load->view('admin/themes/header');
    $this->load->view('admin/location/content', $data);
    $this->load->view('admin/themes/footer');
}


public function edit_location()
{
    $data['title'] = 'Edit Location';
    $id = $this->uri->segment(3);
    $this->load->model('Admin_model','location');
    $data['detail'] = $this->location->getdetaillocation($id);
    $this->load->view('admin/themes/header');
    $this->load->view('admin/location/edit', $data);
    $this->load->view('admin/themes/footer');
}



public function update_location()
{
    $this->load->model('Admin_model','location');
    $this->location->update_location();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Location berhasil diupdate ! </div>');
    redirect(base_url('admin/location'));

}



public function forgotpassword()
{
    $this->load->view('admin/forgotpassword');
}


public function updatepassword()
{
    $this->load->model('Admin_model','forgot');
    $this->forgot->update_forgotpassword();
    redirect(base_url('admin'));
}



}
