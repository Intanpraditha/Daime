<?php
class Evaluasi_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    // Mengambil semua data evaluasi
    public function get_all_evaluasi() {
        return $this->db->get('evaluasi')->result();
    }

    // Menyimpan data evaluasi baru
    public function insert_evaluasi($data) {
        return $this->db->insert('evaluasi', $data);
    }

    // Mengambil data evaluasi berdasarkan ID
    public function get_evaluasi_by_id($evaID) {
        return $this->db->get_where('evaluasi', array('evaID' => $evaID))->row();
    }

    // Mengupdate data evaluasi berdasarkan ID
    public function update_evaluasi($evaID, $data) {
        $this->db->where('evaID', $evaID);
        return $this->db->update('evaluasi', $data);
    }

    // Menghapus data evaluasi berdasarkan ID
    public function delete_evaluasi($evaID) {
        return $this->db->delete('evaluasi', array('evaID' => $evaID));
    }
}
?>
