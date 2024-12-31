<?php
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');


    }
    
    public function index() {
        $this->load->view('login');
    }

    public function process() {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
    
        $where = array(
            'username' => $username,
            'password' => $password
        );
    
        $cekLogin = $this->User_model->cek_login($where);
    
        if ($cekLogin) {
            $sess_data = array(
                'username' => $username,
                'login' => 'OK',
                'UserID' => $cekLogin->UserID // Mengakses properti UserID sebagai objek
            );
            $this->session->set_userdata($sess_data);
            redirect(base_url('dashboard'));
        } else {
            $data['error'] = 'Login gagal. Username atau password salah.';
            $this->load->view('login', $data);
        }
    }
    
    
    

    public function register() {
        $this->load->view('register');
    }
    
    public function register_process() {
        // Proses penambahan user
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'namaLengkap' => $this->input->post('namaLengkap'),
            'alamat' => $this->input->post('alamat')
        );
        $this->User_model->addUser($data);
        redirect('login');
    }

    public function logout() {
        // $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>
