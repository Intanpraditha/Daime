<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('Album_model');
    }

    public function index() {
        $data['albums'] = $this->Album_model->getAllAlbums();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('album/album_list', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('album/add_album');
        $this->load->view('template/footer');
    }

    public function tambah_process() {
        $userID = $this->session->userdata('UserID');
        $data = array(
            'NamaAlbum' => $this->input->post('NamaAlbum'),
            'Deskripsi' => $this->input->post('Deskripsi'),
            'TanggalDibuat' => date('Y-m-d'),
            'UserID' => $userID,
        );
        $this->Album_model->addAlbum($data);
        redirect('album');
    }

    public function edit($albumID) {
        $data['album'] = $this->Album_model->getAlbumByID($albumID);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('album/edit_album', $data);
        $this->load->view('template/footer');
    }

    public function edit_process($albumID) {
        $data = array(
            'NamaAlbum' => $this->input->post('NamaAlbum'),
            'Deskripsi' => $this->input->post('Deskripsi'),
        );
        $this->Album_model->updateAlbum($albumID, $data);
        redirect('album');
    }

    public function hapus($albumID) {
        $this->Album_model->deleteAlbum($albumID);
        redirect('album');
    }

    
}
?>
