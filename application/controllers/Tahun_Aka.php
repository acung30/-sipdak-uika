<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_aka extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_warek3();
        $this->load->model('tahun_aka_m');
    }

    public function index()
    {
        $data['row'] = $this->tahun_aka_m->get();
        $this->template->load('template', 'tahun_akademik/tahun_aka_data', $data);
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, Silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'tahun_akademik/tahun_aka_from_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->tahun_aka_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('Data berhasil disimpan')</script>";
            }
            echo "<script>window.location='" . site_url('tahun_aka') . "'</script>";
        }
    }
}
