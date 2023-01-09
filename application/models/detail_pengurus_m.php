<?php defined('BASEPATH') or exit('No direct script access allowed');

class detail_pengurus_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tbl_ukm');
        if ($id != null) {
            $this->db->where('id_ukm', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
