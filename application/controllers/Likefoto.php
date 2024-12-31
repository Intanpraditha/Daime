<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Likefoto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('Likefoto_model');
    }

    public function index() {
        $data['likes'] = $this->Likefoto_model->getAllLikes();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('like/like_list', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->view('like/add_like');
    }

    public function tambah_process() {
        $data = array(
            'FotoID' => $this->input->post('FotoID'),
            'UserID' => $this->input->post('UserID'),
            'TanggalLike' => $this->input->post('TanggalLike')
        );
        $this->Likefoto_model->addLike($data);
        redirect('likefoto');
    }

    public function tambah_like($fotoID) {
        $UserID = $this->session->userdata('UserID'); // Ambil ID pengguna dari sesi
        $existingLike = $this->Likefoto_model->get_like($fotoID, $UserID);

        if ($existingLike) {
            // Jika sudah ada like, hapus like
            $this->Likefoto_model->hapus_like($existingLike->LikeID);
        } else {
            // Jika belum ada like, tambahkan like
            $data = array(
                'UserID' => $UserID,
                'FotoID' => $fotoID,
                'TanggalLike' => date('y-m-d h:i:s')
            );
            $this->Likefoto_model->tambah_like($data);
        }

        redirect('foto/detail/'.$fotoID); // Redirect kembali ke halaman detail foto
        // redirect('likefoto');
    }


    public function edit($likeID) {
        $data['like'] = $this->Likefoto_model->getLikeByID($likeID);
        $this->load->view('like/edit_like', $data);
    }

    public function edit_process($likeID) {
        $data = array(
            'FotoID' => $this->input->post('FotoID'),
            'UserID' => $this->input->post('UserID'),
            'TanggalLike' => $this->input->post('TanggalLike')
        );
        $this->Likefoto_model->updateLike($likeID, $data);
        redirect('likefoto');
    }

    public function hapus($likeID) {
        $this->Likefoto_model->deleteLike($likeID);
        redirect('likefoto');
    }
}
?>
