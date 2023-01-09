<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_aka_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tbl_tahun_akademik');
        if ($id != null) {
            $this->db->where('id_tahun_akademik', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['tahun_akademik'] = $post['tahun_akademik'];
        $this->db->insert('tbl_tahun_akademik', $params);
    }
}
