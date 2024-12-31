<?php
class Album_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllAlbums() {
        return $this->db->get('album')->result();
    }

    public function getAlbumByID($albumID) {
        return $this->db->get_where('album', array('AlbumID' => $albumID))->row();
    }

    public function addAlbum($data) {
        $this->db->insert('album', $data);
        return $this->db->insert_id();
    }

    public function updateAlbum($albumID, $data) {
        $this->db->where('AlbumID', $albumID);
        $this->db->update('album', $data);
    }

    public function deleteAlbum($albumID) {
        $this->db->where('AlbumID', $albumID);
        $this->db->delete('album');
    }
}
?>
