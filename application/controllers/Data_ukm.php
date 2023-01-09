<?php defined('BASEPATH') or exit('No direct script access allowed');

class Data_ukm extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_warek3();
        $this->load->model('data_ukm_m');
    }

    public function index()
    {
        $data['row'] = $this->data_ukm_m->get();
        $this->template->load('template', 'data_ukm/ukm_data', $data);
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_ukm', 'nama_ukm', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, Silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'data_ukm/ukm_from_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->data_ukm_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('Data berhasil disimpan')</script>";
            }
            echo "<script>window.location='" . site_url('data_ukm') . "'</script>";
        }
    }

    public function add_pengurus()
    {
        $id_ukm = $this->uri->segment(3);

        $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik');
        $this->form_validation->set_message('required', '%s masih kosong, Silahkan isi');
        $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik');
        $this->form_validation->set_rules('pembina_ukm', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('ketua_ukm', 'Nama Ketua UKM', 'required');
        $this->form_validation->set_rules('sekretaris_ukm', 'Nama Sekretaris UKM', 'required');
        $this->form_validation->set_rules('bendahara_ukm', 'Nama Bendahara UKM', 'required');
        $this->form_validation->set_rules('koodirnator_pengembangan_sdm', 'Nama Koordinator Pengembang SDM', 'required');
        $this->form_validation->set_rules('sekretaris_pengembangan_sdm', 'Nama Sekretaris Pengembangan SDM', 'required');
        $this->form_validation->set_rules('anggota_pengembangan_sdm', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('koordinator_kominfo', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('sekretaris_kominfo', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('anggota_kominfo', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('koordinato_riset_dan_teknologi', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('sekretaris_riset_dan_teknologi', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('anggota_riset_dan_teknologi', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('koordinator_sospolma', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('sekretaris_sospolma', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('anggota_sospolma', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('koordinator_sora', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('sekretaris_sora', 'Nama Pembina UKM', 'required');
        $this->form_validation->set_rules('anggota_sora', 'Nama Pembina UKM', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, Silahkan isi');
        $this->form_validation->set_message('is_unique', '{field} Username udah dipake, Silahkan ganti yang lain');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == false) {
            $data['tahun_akademik'] = $this->data_ukm_m->get_tahun_akademik();
            $data['row'] = $this->data_ukm_m->get()->row();

            $this->template->load('template', 'data_ukm/ukm_from_add_pengurus', $data);
        } else {
            $data = [
                'tahun_akademik' => $this->input->post('tahun_akademik'),
                'pembina_ukm' => $this->input->post('pembina_ukm'),
                'ketua_ukm' => $this->input->post('ketua_ukm'),
                'sekretaris_ukm' => $this->input->post('sekretaris_ukm'),
                'bendahara_ukm' => $this->input->post('bendahara_ukm'),
                'koodirnator_pengembangan_sdm' => $this->input->post('koodirnator_pengembangan_sdm'),
                'sekretaris_pengembangan_sdm' => $this->input->post('sekretaris_pengembangan_sdm'),
                'anggota_pengembangan_sdm' => $this->input->post('anggota_pengembangan_sdm'),
                'koordinator_kominfo' => $this->input->post('koordinator_kominfo'),
                'sekretaris_kominfo' => $this->input->post('sekretaris_kominfo'),
                'anggota_kominfo' => $this->input->post('anggota_kominfo'),
                'koordinato_riset_dan_teknologi' => $this->input->post('koordinato_riset_dan_teknologi'),
                'sekretaris_riset_dan_teknologi' => $this->input->post('sekretaris_riset_dan_teknologi'),
                'anggota_riset_dan_teknologi' => $this->input->post('anggota_riset_dan_teknologi'),
                'koordinator_sospolma' => $this->input->post('koordinator_sospolma'),
                'sekretaris_sospolma' => $this->input->post('sekretaris_sospolma'),
                'anggota_sospolma' => $this->input->post('anggota_sospolma'),
                'koordinator_sora' => $this->input->post('koordinator_sora'),
                'sekretaris_sora' => $this->input->post('sekretaris_sora'),
                'anggota_sora' => $this->input->post('anggota_sora'),
            ];

            // var_dump($data, $id_ukm);
            // die;

            $this->db->where('id_ukm', $id_ukm);
            $this->db->update('tbl_ukm', $data);

            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('Data berhasil disimpan')</script>";
            }
            echo "<script>window.location='" . site_url('data_ukm') . "'</script>";
            echo "<script> alert('Data gagal disimpan')</script>";
        }
    }

    // public function add_pengurus($id)
    // {
    //     $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik');
    //     $this->form_validation->set_message('required', '%s masih kosong, Silahkan isi');
    //     $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

    //     if ($this->form_validation->run() == FALSE) {
    //         $query = $this->data_ukm_m->get($id);
    //         if ($query->num_rows() > 0) {

    //             $data['row'] = $query->row();
    //             $data['tahun_akademik'] = $this->data_ukm_m->get_tahun_akademik();
    //             $this->template->load('template', 'data_ukm/ukm_from_add_pengurus', $data);
    //         } else {
    //             echo "<script> alert('Data tidak ditemukan');";
    //             echo "window.location='" . site_url('data_ukm') . "'</script>";
    //         }
    //     } else {
    //         $post = $this->input->post(null, TRUE);

    //         $this->data_ukm_m->add_pengurus($post);
    //         if ($this->db->affected_rows() > 0) {
    //             echo "<script> alert('Data berhasil disimpan')</script>";
    //         }
    //         echo "<script>window.location='" . site_url('data_ukm') . "'</script>";
    //         echo "<script> alert('Data gagal disimpan');";
    //     }
    // }

    // public function add_pengurus($id)
    // {
    //     $this->load->library('form_validation');

    //     $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik');
    //     // $this->form_validation->set_rules('pembina_ukm', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('ketua_ukm', 'Nama Ketua UKM', 'required');
    //     // $this->form_validation->set_rules('sekretaris_ukm', 'Nama Sekretaris UKM', 'required');
    //     // $this->form_validation->set_rules('bendahara_ukm', 'Nama Bendahara UKM', 'required');
    //     // $this->form_validation->set_rules('koordinator_pengembangan_sdm', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('sekretaris_pengembangan_sdm', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('anggota_pengembangan_sdm', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('koordinator_kominfo', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('sekretaris_kominfo', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('anggota_kominfo', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('koordinator_riset_dan_teknologi', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('sekretaris_riset_dan_teknologi', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('anggota_riset_dan_teknologi', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('koordinator_sospolma', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('sekretaris_sospolma', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('anggota_sospolma', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('koordinator_sora', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('sekretaris_sora', 'Nama Pembina UKM', 'required');
    //     // $this->form_validation->set_rules('anggota_sora', 'Nama Pembina UKM', 'required');

    //     // $this->form_validation->set_message('required', '%s masih kosong, Silahkan isi');
    //     // $this->form_validation->set_message('is_unique', '{field} Username udah dipake, Silahkan ganti yang lain');

    //     $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

    //     // if ($this->form_validation->run() == FALSE) {
    //     //     $this->template->load('template', 'data_ukm/ukm_from_add_pengurus');
    //     // } else {
    //     //     $post = $this->input->post(null, TRUE);
    //     //     $this->data_ukm_m->add_pengurus($post);
    //     //     if ($this->db->affected_rows() > 0) {
    //     //         echo "<script> alert('Data berhasil disimpan')</script>";
    //     //     }
    //     //     echo "<script>window.location='" . site_url('data_ukm') . "'</script>";
    //     // }

    //     if ($this->form_validation->run() == FALSE) {
    //         $query = $this->data_ukm_m->get($id);
    //         if ($query->num_rows() > 0) {
    //             $data['row'] = $query->row();

    //             $this->template->load('template', 'data_ukm/ukm_from_add_pengurus', $data);
    //         } else {
    //             echo "<script> alert('Data tidak Ditemukan')</script>";
    //             echo "<script>window.location='" . site_url('data_ukm') . "'</script>";
    //         }
    //     } else {
    //         $post = $this->input->post(null, TRUE);
    //         $this->data_ukm_m->add_pengurus($post);
    //         if ($this->db->affected_rows() > 0) {
    //             echo "<script> alert('Data berhasil disimpan')</script>";
    //         }
    //         echo "<script>window.location='" . site_url('data_ukm') . "'</script>";
    //     }
    // }

    // public function detail()
    // {
    //     $this->load->library('form_validation');

    //     $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required');
    //     $this->form_validation->set_rules('pembina_ukm', 'pembina_ukm', 'required');
    //     $this->form_validation->set_rules('ketua_ukm', 'ketua_ukm', 'required');

    //     $this->form_validation->set_message('required', '%s masih kosong, Silahkan isi');

    //     $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->template->load('template', 'data_ukm/ukm_detail');
    //     } else {
    //         $post = $this->input->post(null, TRUE);
    //         $this->data_ukm_m->add($post);
    //         if ($this->db->affected_rows() > 0) {
    //             echo "<script> alert('Data berhasil disimpan')</script>";
    //         }
    //         echo "<script>window.location='" . site_url('data_ukm') . "'</script>";
    //     }
    // }
}
