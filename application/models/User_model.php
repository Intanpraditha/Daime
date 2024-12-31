<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllUsers() {
        return $this->db->get('user')->result();
    }

    public function getUserByID($UserID) {
        return $this->db->get_where('user', array('UserID' => $UserID))->row();
    }

    public function addUser($data) {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }

    public function updateUser($UserID, $data) {
        $this->db->where('UserID', $UserID);
        $this->db->update('user', $data);
    }

    public function deleteUser($UserID) {
        $this->db->where('UserID', $UserID);
        $this->db->delete('user');
    }

    public function cek_login($where)
    {
        $query = $this->db->get_where('user', $where);
        return $query->row();
    }

    public function get_photos_by_user($user_id) {
        // Ambil daftar foto yang diunggah oleh pengguna berdasarkan ID pengguna
        $this->db->where('UserID', $user_id);
        $query = $this->db->get('foto');
        return $query->result();
    }

    public function count_likes_by_photo($photo_id) {
        // Hitung jumlah like yang dimiliki oleh foto berdasarkan ID foto
        $this->db->where('FotoID', $photo_id);
        $this->db->from('likefoto');
        return $this->db->count_all_results();
    }

    public function get_all_albums_by_user($user_id) {
        // Ambil semua album yang dibuat oleh pengguna berdasarkan ID pengguna
        $this->db->where('UserID', $user_id);
        $query = $this->db->get('album');
        return $query->result();
    }
    public function count_total_likes_by_user($user_id) {
        // Query untuk menghitung jumlah total like dari semua foto yang diunggah oleh seorang pengguna
        $this->db->select('COUNT(*) as total_likes');
        $this->db->from('likefoto');
        $this->db->join('foto', 'likefoto.FotoID = foto.FotoID');
        $this->db->where('foto.UserID', $user_id);
        $query = $this->db->get();

        // Ambil hasil query
        $result = $query->row();

        // Return jumlah total like
        return $result->total_likes;
    }

    public function get_photos_by_album($album_id, $user_id) {
        // Query untuk mengambil foto-foto berdasarkan album
        $this->db->select('*');
        $this->db->from('foto');
        $this->db->where('AlbumID', $album_id);
        $this->db->where('UserID', $user_id);
        return $this->db->get()->result();
    }

    public function get_photos_with_user_data() {
        $this->db->select('foto.*, user.namaLengkap');
        $this->db->from('foto');
        $this->db->join('user', 'foto.UserID = user.UserID');
        return $this->db->get()->result();
    }
    
}
?>
