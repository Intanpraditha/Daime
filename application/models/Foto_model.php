<?php
class Foto_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllPhotos() {
        return $this->db->get('foto')->result();
    }

    // Foto_model.php

    public function getPhotoByID($fotoID) {
        $this->db->select('Foto.*, user.namaLengkap as namaUploader');
        $this->db->from('Foto');
        $this->db->join('user', 'Foto.UserID = user.UserID', 'left');
        $this->db->where('Foto.FotoID', $fotoID);

        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }


    public function addPhoto($data) {
        $this->db->insert('foto', $data);
        return $this->db->insert_id();
    }

    public function updatePhoto($FotoID, $data) {
        $this->db->where('FotoID', $FotoID);
        $this->db->update('foto', $data);
    }

    public function deletePhoto($FotoID) {
        $this->db->where('FotoID', $FotoID);
        $this->db->delete('foto');
    }

    // Method untuk mendapatkan semua data gambar
    public function get_all_gambar() {
        $this->db->order_by('FotoID', 'DESC');
        return $this->db->get('foto')->result();
    }

    public function get_all_albums() {
        return $this->db->get('album')->result_array();
    }

    public function simpan_komentar($data) {
        $this->db->insert('komentarfoto', $data);
    }

    public function getKomentarFoto($FotoID) {
        $this->db->select('komentarfoto.*, user.namaLengkap');
        $this->db->from('komentarfoto');
        $this->db->join('user', 'user.UserID = komentarfoto.UserID');
        $this->db->where('komentarfoto.FotoID', $FotoID);
        return $this->db->get()->result();
    }

    public function get_all_photos_with_total_likes_and_user_data() {
        // Ambil data foto beserta total like, nama lengkap, dan username pengguna terkait
        $this->db->select('f.*, COUNT(l.LikeID) AS total_likes, u.namaLengkap, u.username');
        $this->db->from('foto f');
        $this->db->join('likefoto l', 'f.FotoID = l.FotoID', 'left');
        $this->db->join('user u', 'f.UserID = u.UserID', 'left');
        $this->db->group_by('f.FotoID');
        $this->db->order_by('total_likes', 'desc'); 
        $query = $this->db->get();
        return $query->result();
    }
    public function get_albums_by_user($user_id)
    {
        $this->db->where('UserID', $user_id);
        return $this->db->get('album')->result_array();
    }

    
    



    

}
?>
