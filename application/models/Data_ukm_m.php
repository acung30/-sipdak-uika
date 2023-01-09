<?php defined('BASEPATH') or exit('No direct script access allowed');

class Data_ukm_m extends CI_Model
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

    public function add($post)
    {
        $params['nama_ukm'] = $post['nama_ukm'];
        $this->db->insert('tbl_ukm', $params);
    }

    public function add_pengurus($post)
    {
        $params['tahun_akademik'] = $post['tahun_akademik'];
        $params['pembina_ukm'] = $post['pembina_ukm'];
        $params['ketua_ukm'] = $post['ketua_ukm'];
        $params['sekretaris_ukm'] = $post['sekretaris_ukm'];
        $params['bendahara_ukm'] = $post['bendahara_ukm'];
        $params['koordinator_pengembangan_sdm'] = $post['koordinator_pengembangan_sdm'];
        $params['sekretaris_pengembangan_sdm'] = $post['sekretaris_pengembangan_sdm'];
        $params['anggota_pengembangan_sdm'] = $post['anggota_pengembangan_sdm'];
        $params['koordinator_kominfo'] = $post['koordinator_kominfo'];
        $params['sekretaris_kominfo'] = $post['sekretaris_kominfo'];
        $params['anggota_kominfo'] = $post['anggota_kominfo'];
        $params['koordinator_riset_dan_teknologi'] = $post['koordinator_riset_dan_teknologi'];
        $params['sekretaris_riset_dan_teknologi'] = $post['sekretaris_riset_dan_teknologi'];
        $params['anggota_riset_dan_teknologi'] = $post['anggota_riset_dan_teknologi'];
        $params['koordinator_sospolma'] = $post['koordinator_sospolma'];
        $params['sekretaris_sospolma'] = $post['sekretaris_sospolma'];
        $params['anggota_sospolma'] = $post['anggota_sospolma'];
        $params['koordinator_sora'] = $post['koordinator_sora'];
        $params['sekretaris_sora'] = $post['sekretaris_sora'];
        $params['anggota_sora'] = $post['anggota_sora'];

        $this->db->where('id_ukm', $post['id_ukm']);
        $this->db->update('tbl_ukm', $params);
    }

    public function get_tahun_akademik()
    {
        $this->db->select('*');
        $this->db->from('tbl_tahun_akademik');
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit(2);
        $query = $this->db->get();
        return $query->result();
    }
}
