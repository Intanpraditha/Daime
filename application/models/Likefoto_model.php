<?php
class Likefoto_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllLikes() {
        return $this->db->get('likefoto')->result();
    }

    public function getLikeByID($likeID) {
        return $this->db->get_where('likefoto', array('LikeID' => $likeID))->row();
    }

    public function addLike($data) {
        $this->db->insert('likefoto', $data);
        return $this->db->insert_id();
    }

    public function updateLike($likeID, $data) {
        $this->db->where('LikeID', $likeID);
        $this->db->update('likefoto', $data);
    }

    public function deleteLike($likeID) {
        $this->db->where('LikeID', $likeID);
        $this->db->delete('likefoto');
    }

    public function tambah_like($data) {
        $this->db->insert('likefoto', $data);
    }

    public function hapus_like($likeID) {
        $this->db->where('LikeID', $likeID);
        $this->db->delete('likefoto');
    }

    public function get_like($fotoID, $userID) {
        $this->db->where('FotoID', $fotoID);
        $this->db->where('UserID', $userID);
        return $this->db->get('likefoto')->row();
    }

    public function is_liked($fotoID, $userID) {
        $this->db->where('FotoID', $fotoID);
        $this->db->where('UserID', $userID);
        $query = $this->db->get('likefoto');
        return $query->num_rows() > 0; // Return true jika sudah ada like, false jika belum
    }
    // Likefoto_model.php

    public function getLikeCountByFotoID($fotoID) {
        $this->db->where('FotoID', $fotoID);
        return $this->db->count_all_results('likefoto');
    }


}
?>
