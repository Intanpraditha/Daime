<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('Evaluasi_model');
    }

    // Menampilkan semua data evaluasi
    public function index() {
        $data['evaluasi'] = $this->Evaluasi_model->get_all_evaluasi();

        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('evaluasi/evaluasi_list', $data);
        $this->load->view('template/footer');
    }

    // Menampilkan form untuk menambah data evaluasi
    public function create() {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('evaluasi/add_evaluasi');
        $this->load->view('template/footer');
    }

    // Menyimpan data evaluasi baru
    public function store() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'catatan' => $this->input->post('catatan'),
            'status' => $this->input->post('status')
        );
        $this->Evaluasi_model->insert_evaluasi($data);
        redirect('evaluasi');
    }

    // Menampilkan form untuk mengedit data evaluasi
    public function edit($evaID) {
        $data['evaluasi'] = $this->Evaluasi_model->get_evaluasi_by_id($evaID);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('evaluasi/edit_evaluasi', $data);
        $this->load->view('template/footer');
    }

    // Mengupdate data evaluasi
    public function update($evaID) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'catatan' => $this->input->post('catatan'),
            'status' => $this->input->post('status')
        );
        $this->Evaluasi_model->update_evaluasi($evaID, $data);
        redirect('evaluasi');
    }

    // Menghapus data evaluasi
    public function delete($evaID) {
        $this->Evaluasi_model->delete_evaluasi($evaID);
        redirect('evaluasi');
    }
}
?>
