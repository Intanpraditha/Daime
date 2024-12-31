<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        // Load model, library, helper, etc. here if needed
        $this->load->model('Foto_model'); // Load model gambar_model
    }

    public function index() {
        // Load view for dashboard
        $this->load->view('komponen/header.php');
        $this->load->view('komponen/navbar');
        
        // Ambil data gambar dari model
        $data['gambar'] = $this->Foto_model->get_all_gambar();
        
        // Kirim data gambar ke view
        $this->load->view('tampilan/dashboard', $data);
        $this->load->view('komponen/footer');
    }

    

    
}
?>
