<?php
class Komentarfoto_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllComments() {
        return $this->db->get('komentarfoto')->result();
    }

    public function getCommentByID($komentarID) {
        return $this->db->get_where('komentarfoto', array('KomentarID' => $komentarID))->row();
    }

    public function addComment($data) {
        $this->db->insert('komentarfoto', $data);
        return $this->db->insert_id();
    }

    public function updateComment($komentarID, $data) {
        $this->db->where('KomentarID', $komentarID);
        $this->db->update('komentarfoto', $data);
    }

    public function deleteComment($komentarID) {
        $this->db->where('KomentarID', $komentarID);
        $this->db->delete('komentarfoto');
    }
    public function getcommentCountByFotoID($fotoID) {
        $this->db->where('FotoID', $fotoID);
        return $this->db->count_all_results('komentarfoto');
    }
}
?>
