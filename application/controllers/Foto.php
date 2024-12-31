<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('Foto_model');
        $this->load->model('Likefoto_model');
        $this->load->model('Komentarfoto_model');
        $this->load->model('User_model');
    }

    public function index() {
        $data['photos'] = $this->Foto_model->getAllPhotos();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('foto/photo_list', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $user_id = $this->session->userdata('UserID');
    
        // Panggil model untuk mendapatkan album berdasarkan ID pengguna saat ini
        $data['albums'] = $this->Foto_model->get_albums_by_user($user_id);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('foto/add_photo', $data);
        $this->load->view('template/footer');
    }

    public function tambah_process() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
    
        $this->load->library('upload', $config);
    
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_error', $error);
        } else {
            // Ambil UserID dari sesi
            $userID = $this->session->userdata('UserID');
    
            $data = array(
                'JudulFoto' => $this->input->post('JudulFoto'),
                'DeskripsiFoto' => $this->input->post('DeskripsiFoto'),
                'TanggalUnggah' => date('Y-m-d'),
                'LokasiFile' => $this->upload->data('file_name'), // Nama file yang diunggah
                'AlbumID' => $this->input->post('AlbumID'),
                'UserID' => $userID // UserID diambil dari sesi
            );
            $this->Foto_model->addPhoto($data);
            redirect('dashboard');
        }
    }
    
    

    public function edit($fotoID) {
        $data['photo'] = $this->Foto_model->getPhotoByID($fotoID);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('foto/edit_photo', $data);
        $this->load->view('template/footer');
    }

    public function edit_process($fotoID) {
        $data = array(
            'JudulFoto' => $this->input->post('JudulFoto'),
            'DeskripsiFoto' => $this->input->post('DeskripsiFoto'),
        );
        $this->Foto_model->updatePhoto($fotoID, $data);
        redirect('foto');
    }

    public function hapus($fotoID) {
        // Ambil nama file foto dari database
        $foto = $this->Foto_model->getPhotoByID($fotoID);
        $lokasiFile = './uploads/' . $foto->LokasiFile;
        
        // Hapus foto dari database
        $this->Foto_model->deletePhoto($fotoID);

        // Hapus file foto dari direktori uploads
        if (file_exists($lokasiFile)) {
            unlink($lokasiFile); // Hapus file jika ada
        }

        redirect('foto');
    }
    
    public function detail($fotoID) {
        $data['komentar'] = $this->Foto_model->getKomentarFoto($fotoID);
        $data['gambar'] = $this->Foto_model->getPhotoByID($fotoID);
        $data['jumlah_like'] = $this->Likefoto_model->getLikeCountByFotoID($fotoID);
        $data['jumlah_komen'] = $this->Komentarfoto_model->getcommentCountByFotoID($fotoID);
        // $data['liked'] = $this->Likefoto_model->is_liked($gambar->FotoID, $this->session->userdata('UserID'));
        $this->load->view('komponen/header');
        $this->load->view('komponen/navbar');
        $this->load->view('tampilan/detail_gambar', $data);
        $this->load->view('komponen/footer');
    }

    public function rank_foto() {
        // Dapatkan daftar foto dari database dengan total like, nama lengkap, dan username pengguna terkait
        $data['photos_with_total_likes_and_user_data'] = $this->Foto_model->get_all_photos_with_total_likes_and_user_data();
    
        // Load view dengan data
        $this->load->view('komponen/header');
        $this->load->view('komponen/navbar');
        $this->load->view('tampilan/rank-foto', $data);
        $this->load->view('komponen/footer');
    }
    
    

    public function tambah_komentar($fotoID) {
        if ($this->input->post('komentar')) {
            $userID = $this->session->userdata('UserID');
            $data = array(
                'FotoID' => $fotoID,
                'UserID' => $userID,
                'IsiKomentar' => $this->input->post('komentar'),
                'TanggalKomentar' => date('Y-m-d')
            );
            $this->Foto_model->simpan_komentar($data);
            redirect('foto/detail/'.$fotoID); // Redirect ke halaman detail foto setelah menambahkan komentar
        } else {
            // Jika tidak ada komentar yang dikirim, tampilkan ulang halaman
            $data['gambar'] = $this->Foto_model->getFotoByID($fotoID);
            $data['komentar'] = $this->Foto_model->getKomentarFoto($fotoID);
            $this->load->view('detail_foto', $data);
        }
    }

    


}
?>
