<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    
        // Memeriksa apakah pengguna sudah masuk atau belum
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
    
        // Memuat model User_model untuk mengakses data pengguna
        $this->load->model('User_model');
        
        // Memuat data pengguna dari model
        $UserID = $this->session->userdata('UserID'); // Anda harus menyesuaikan dengan kunci sesi yang digunakan
        $user_data = $this->User_model->getUserByID($UserID); // Misalnya, Anda memiliki metode get_user_data() untuk mendapatkan data pengguna dari model
    
        // Menyimpan alamat file foto profil pengguna dalam sesi jika tersedia
        if (!empty($user_data)) {
            $this->session->set_userdata('LokasiFoto', $user_data->LokasiFoto);
            $this->session->set_userdata('namaLengkap', $user_data->namaLengkap);
            $this->session->set_userdata('alamat', $user_data->alamat);
            $this->session->set_userdata('email', $user_data->email);
        }

        
    }
    

    public function index() {
        // Tampilkan semua data user
        $data['users'] = $this->User_model->getAllUsers();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('user/user_list', $data);
        $this->load->view('template/footer');
    }

    public function profile()
    {

        $user_id = $this->session->userdata('UserID');

        $data['users'] = $this->User_model->getAllUsers();

        $photos = $this->User_model->get_photos_by_user($user_id);
        
        // Inisialisasi variabel jumlah total like dan jumlah total foto
        $total_likes = 0;
        $total_photos = count($photos);
        
        // Untuk setiap foto, hitung jumlah like yang dimilikinya
        foreach ($photos as $photo) {
            $total_likes += $this->User_model->count_likes_by_photo($photo->FotoID);
        }
        
        // Kirim data ke view
        $data['total_likes'] = $total_likes;
        $data['total_photos'] = $total_photos;
        $data['album'] = $this->User_model->get_all_albums_by_user($user_id);
        $data['photos'] = $this->User_model->get_photos_by_user($user_id);

        $this->load->view('komponen/header');
        $this->load->view('komponen/navbar');
        $this->load->view('tampilan/user-profile', $data);
        $this->load->view('komponen/footer');
    }


    

    public function user_rank() {
        // Dapatkan daftar pengguna dari database
        $users = $this->User_model->getAllUsers();
    
        // Buat array untuk menyimpan jumlah total like setiap pengguna
        $total_likes_array = array();
    
        // Untuk setiap pengguna, hitung jumlah total like dari semua foto yang diunggah oleh pengguna tersebut
        foreach ($users as $user) {
            $total_likes = $this->User_model->count_total_likes_by_user($user->UserID);
            $total_likes_array[$user->UserID] = $total_likes;
        }
    
        // Kirim data ke view
        $data['users'] = $users;
        $data['total_likes_array'] = $total_likes_array;
    
        // Load view dengan data
        $this->load->view('komponen/header');
        $this->load->view('komponen/navbar');
        $this->load->view('tampilan/rank-user', $data);
        $this->load->view('komponen/footer');
    }

    public function tambah() {
        // Form untuk menambahkan user
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('user/add_user');
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
    
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'namaLengkap' => $this->input->post('namaLengkap'),
                'alamat' => $this->input->post('alamat'),
                'LokasiFoto' => $this->upload->data('file_name')
            );
            $this->User_model->addUser($data);
            redirect('user');
        }
    }

    public function tambah_proces() {
        // Proses penambahan user
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'namaLengkap' => $this->input->post('namaLengkap'),
            'alamat' => $this->input->post('alamat')
        );
        $this->User_model->addUser($data);
        redirect('user');
    }

    public function edit($UserID) {
        // Form untuk mengedit user
        $data['user'] = $this->User_model->getUserByID($UserID);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('user/edit_user', $data);
        $this->load->view('template/footer');
    }

    public function edit_process($UserID) {
        // Proses pengeditan user
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'namaLengkap' => $this->input->post('namaLengkap'),
            'alamat' => $this->input->post('alamat')
        );
        $this->User_model->updateUser($UserID, $data);
        redirect('user');
    }

    public function hapus($UserID) {
        // Proses penghapusan user
        $this->User_model->deleteUser($UserID);
        redirect('user');
    }
}
?>
