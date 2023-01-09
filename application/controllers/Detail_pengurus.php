<?php defined('BASEPATH') or exit('No direct script access allowed');

class detail_pengurus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_warek3();
        $this->load->model('detail_pengurus_m');
    }

    public function index()
    {
        $data['row'] = $this->detail_pengurus_m->get();
        $this->template->load('template', 'data_ukm/ukm_detail', $data);
    }
}
