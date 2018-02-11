<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporandiagnosis extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function laporandiagnosis()
    {
        $this->db->select('*');
        $this->db->from('tb_diagnosis');
        $data = $this->db->get()->result_array();
        return $data;
    }

}