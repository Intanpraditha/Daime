<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentarfoto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('Komentarfoto_model');
    }

    public function index() {
        $data['comments'] = $this->Komentarfoto_model->getAllComments();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('komen/comment_list', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        $this->load->view('komen/add_comment');
    }

    public function tambah_process() {
        $data = array(
            'FotoID' => $this->input->post('FotoID'),
            'UserID' => $this->input->post('UserID'),
            'IsiKomentar' => $this->input->post('IsiKomentar'),
            'TanggalKomentar' => $this->input->post('TanggalKomentar')
        );
        $this->Komentarfoto_model->addComment($data);
        redirect('komentarfoto');
    }

    public function edit($komentarID) {
        $data['comment'] = $this->Komentarfoto_model->getCommentByID($komentarID);
        $this->load->view('komen/edit_comment', $data);
    }

    public function edit_process($komentarID) {
        $data = array(
            'FotoID' => $this->input->post('FotoID'),
            'UserID' => $this->input->post('UserID'),
            'IsiKomentar' => $this->input->post('IsiKomentar'),
            'TanggalKomentar' => $this->input->post('TanggalKomentar')
        );
        $this->Komentarfoto_model->updateComment($komentarID, $data);
        redirect('komentarfoto');
    }

    public function hapus($komentarID) {
        $this->Komentarfoto_model->deleteComment($komentarID);
        redirect('komentarfoto');
    }
}
?>
