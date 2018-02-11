<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporandiagnosis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_laporandiagnosis');
    }

    public function index()
    {
        $data = $this->m_laporandiagnosis->laporandiagnosis();
        $this->load->view('laporandiagnosis', array('data' => $data));
    }



}